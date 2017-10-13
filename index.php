<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Data Design Project</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<main>
			<h1>Data Design Project</h1>
				<p>Website: <a href="https://www.reddit.com/" target="_blank">Reddit.com</a></p>
				<p>Link to Post: <a href="https://www.reddit
			.com/r/Albuquerque/comments/75q2kp/hows_verizon_tmobile_celldata_coverage_aibf_field/" target="_blank">Reddit
					Post</a></p>
				<h2>Phase 0 Assignment: </h2>
					<h3>Persona</h3>
						<p><strong>Name:</strong> Malcolm Dubois</p>
						<p><strong>Age:</strong> 33</p>
						<p><strong>Profession:</strong> Verizon Call Center Customer Support</p>
						<p><strong>Technology:</strong> Malcolm is an avid user of technology. He is always purchasing the latest
							model of anything Apple releases. He regularly claims "If my house were burning down and
							I could only grab three things including my family. I would grab my MabBook Pro, his Bongo Drum
							and HTC Vive. </p>
						<p><strong>Hobbies:</strong> When not at the call center, Malcolm is using his MacBook to surf the
							internet or using his HTC Vive to dabble in the world of virtual reality. In addition to his
							passion for technology, he is also in a ska band called HomeGrown with his wife and her two
							brothers.</p>
						<p><strong>Goals:</strong> Malcolm loves Reddit. He uses Reddit for two purposes:</p>
							<ol>
								<li> Browsing his favorite topics to see what people are saying about ska, virtual reality and
									Verizon.</li>
								<li> By starting threads about topics he is looking to get more information he feels like
									this is the perfect way to supplement online research with a real human "voice". As a
									regularly contributing member of Reddit he posts questions and answers questions.</li>
							</ol>
					<h3>User Story</h3>
						<p></p>
					<h3>Use Case/Interaction Flow</h3>
						<p></p>
				<section>
					<h3 class="section">Conceptual Model</h3>
						<h4 class="title">Entities & Attributes</h4>
							<p class="datadesigntitle"><strong>User</strong></p>
								<ul class="datadesignlist">
									<li>uniqueUserID (primary)</li>
									<li>userEmail</li>
									<li>userName</li>
									<li>userImage</li>
									<li>userHash</li>
									<li>userSalt</li>
									<li>userActivationToken</li>
								</ul>
							<p class="datadesigntitle"><strong>Post</strong></p>
								<ul class="datadesignlist">
									<li>uniquePostID (primary)</li>
									<li>postuniqueUserID (foreign)</li>
									<li>postTitle</li>
									<li>postDetail</li>
									<li>postSubject</li>
									<li>postLocation</li>
									<li>postDateTime</li>
								</ul>
							<p class="datadesigntitle"><strong>Comment</strong></p>
								<ul class="datadesignlist">
									<li>uniqueCommentID (primary)</li>
									<li>commentuniquePostID (foreign)</li>
									<li>commentuniqueUserID (foreign)</li>
									<li>commentuniqueCommentID (foreign)</li>
									<li>commentDetail</li>
									<li>commentDateTime</li>
									<li>commentPoints</li>
								</ul>
						<h4 class="title">Relations</h4>
							<ul class="datadesignlist">
								<li>One User Can Have Many Posts <strong>(1 to n)</strong></li>
								<li>Many User Can Have Many Comments <strong>(m to n)</strong></li>
								<li>Many Posts Can Have Many Comments <strong>(m to n)</strong></li>
								<li>Many Comments Can Have Many Comments <strong>(m to n)</strong></li>
							</ul>
				</section>
		</main>
	</body>
</html>