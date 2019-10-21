@extends('layouts.app')

@section('title')
	Masthead
@endsection

@section('content')
	<div class="layout__sheet">
		<h1>Masthead</h1>
		<p>Information according to § 5 TMG<p>

		<ul>
			<li>Dennis Prudlo</li>
			<li>Slabystraße 17</li>
			<li>12459 Berlin, Germany</li>
		</ul>

		<h2>Contact</h2>
		<ul>
			<li>Phone: Upon request</li>
			<li>E-Mail: <a href="mailto:mail@dennisprudlo.com">mail@dennisprudlo.com</a></li>
		</ul>

		<h2>Liability for content</h2>
		<p>
			The contents of our pages were created with the greatest care.
			For the correctness, completeness and topicality of the contents we can take over however no guarantee.
			As a service provider we are responsible according to § 7 Abs.1 TMG for our own contents on these pages according to the general laws.
			According to §§ 8 to 10 TMG we as the service provider, however, are not obliged to monitor transmitted or stored third-party information or to investigate circumstances that indicate an unlawful activity or violation of the law.
			Obligations to remove or block the use of information under the general laws remain unaffected by this.
			However, a liability in this respect is only possible from the time of knowledge of a concrete violation of the law.
			Upon becoming aware of such infringements of the law we will remove these contents immediately.
		</p>

		<h2>Liability for links</h2>
		<p>
			Our offer contains links to external websites of third parties, on whose contents we have no influence.
			Therefore, we cannot assume any liability for these external contents.
			The respective provider or operator of the pages is always responsible for the contents of the linked pages.
			The linked pages were checked for possible legal infringements at the time of linking.
			Illegal contents were not recognizable at the time of linking.
			A permanent control of the contents of the linked pages is not reasonable without concrete evidence of an infringement.
			As soon as we become aware of any legal infringements, we will remove such links immediately.
		</p>

		<h2>Copyright</h2>
		<p>
			The contents and works on these pages created by the site operators are subject to the German copyright law.
			Duplication, processing, distribution and any form of commercialization of such material beyond the scope of the copyright law shall require the prior written consent of its respective author or creator.
			Downloads and copies of these pages are only permitted for private, non-commercial use.
			Insofar as the content on this site was not created by the operator, the copyrights of third parties are respected.
			In particular, contents of third parties are marked as such.
			Should you nevertheless become aware of a copyright infringement, please inform us accordingly.
			As soon as we become aware of any infringements, we will remove such content immediately.
		</p>

		<h2>Privacy Policy</h2>
		<p>
			The use of our website is generally possible without providing personal data.
			Insofar as personal data (e.g. name, address or e-mail addresses) is collected on our pages, this is always done on a voluntary basis as far as possible.
			This data will not be passed on to third parties without your express consent.
			We would like to point out that data transmission on the Internet (e.g. communication by e-mail) can be subject to security gaps.
			A complete protection of the data against access by third parties is not possible.
			The use of contact data published within the scope of the imprint obligation by third parties to send unsolicited advertising and information materials is hereby expressly prohibited.
			The operators of this website expressly reserve the right to take legal action against unsolicited mailing or e-mailing of spam and other similar advertising materials.
			More detailed privacy policy information can be found in our <a href="{!! route('get-privacy') !!}">privacy policy</a>.
		</p>
	</div>
@endsection
