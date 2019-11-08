class Animator {

	constructor (elements, properties = {}, duration = 1000, curve = 'linear') {
		if (!(elements instanceof Node) && !(elements instanceof NodeList)) {
			return console.error('Invalid parameter type for elements in Animator');
		}

		if (elements instanceof NodeList) {
			this.elements = [];
			elements.forEach((node) => {
				this.elements.push(node);
			});
		} else {
			this.elements = [elements];
		}

		this.properties		= properties;
		this.duration		= duration;
		this.curve			= curve;
		this.curveFunction	= () => {};

		this.smoothiness	= 10;
		this.complete		= () => {};

		this.debug = 0;

		this.setCurve(curve);
	}

	setCurve (curve) {
		if (curve == 'linear') {
			this.curveFunction = (iteration, iterations) => {
				return 1;
			}
		} else if (curve == 'easeIn') {
			this.curveFunction = (x) => {
				return Math.exp(x) - 1;
			}
		} else {
			this.curveFunction = (iteration, iterations) => {
				return 0.2;
			}
		}
	}

	run (complete) {
		let interval	= 100 / this.smoothiness;
		let iterations	= this.duration / interval;

		this.elements.forEach((element) => {
			let deltaProperties = {};
			for (let property in this.properties) {
				deltaProperties[property] = (this.properties[property] - element[property]) / iterations;
			}

			let iteration	= 0;
			let id = setInterval(() => {
				for (let property in deltaProperties) {
					element[property] += deltaProperties[property] * this.deltaFactor(iteration, iterations);
				}

				iteration++;
				if (iteration >= iterations) {
					complete == undefined ? this.complete() : complete();
					clearInterval(id);
					console.log(this.debug);
				}
			}, interval);

			console.log(this.properties.scrollTop);
		});
	}

	deltaFactor (iteration, iterations) {
		let normalized = iteration / iterations;
		// let start = -(iterations - (iterations / 2));
		// let absoluteDelta = Math.pow(start + iteration, 2) + (iterations / 2);
		// let relativeDelta = absoluteDelta / Math.pow(start, 2);
		// console.log(relativeDelta);
		// return Math.pow(2, iteration) * 0.0000001;
		let result = this.curveFunction(normalized);
		this.debug += result;
		// console.log(normalized + ' :> ' + result);
		return result;
	}
}
