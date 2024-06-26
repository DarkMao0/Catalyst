<?php
    Renderer::includeTemplate("frontend/components/cubeback.php", []);
?>

<style>
	body {
		overflow-x: hidden;
	}

	div.description-block {
		display: flex;
		justify-content: space-between;
		flex-direction: row;

		animation-name: appearAnimation-Y;
		animation-duration: 0.5s;
	}

	div.description-block .secondary-description {
		color: var(--secondary-color-02);
		font-size: 16px;

		display: flex;
		justify-content: flex-start;
		flex-direction: column;
		align-items: end;
	}

	div.description-block h2 {
		font-size: 48px;
		font-weight: bold;
	}

	.offer-block {
		display: flex;
		justify-content: center;
		flex-direction: column;
	}

	.offer-block div h2{
		margin-right: 50px;
	}

	#aboutusBlock div.description-block.offer-block {
		display: flex;
		flex-direction: column;
	}

	#aboutusBlock div.offers-block {
		display: flex;
		flex-direction: row;
	}

	#aboutusBlock div.offers-block div {
		margin: 10px;
		background-color: var(--secondary-color-04);

		border-radius: 10px;
		padding: 15px;
	}

	#aboutusBlock {
		display: flex;
		flex-direction: column;
		position: relative;
		z-index: -1;
	}

	#aboutusBlock a {
		position: absolute;
		top: -20px;
	}

	.red-section-block {
		display: flex;
		flex-direction: column;
		align-items: center;

		background: var(--primary-color-01);
		--m:
			conic-gradient(from -45deg at bottom,#0000,#000 1deg 89deg,#0000 90deg) bottom/80px 51% repeat-x,
			conic-gradient(from 135deg at top   ,#0000,#000 1deg 89deg,#0000 90deg) top   /80px 51% repeat-x;
		-webkit-mask: var(--m);
				mask: var(--m);
	}

	.companies-list {
		display: flex;
		flex-direction: row;
		align-items: center;
	}

	.companies-list li {
		margin: 10px;

		display: flex;
		justify-content: center;
	}

	section.big-section {
		width: 100%;
	}

	@media (max-width: 600px) {
		section {
			height: 120vh;
		}

		#contactForm {
			display: flex;
			flex-direction: column;
		}

		div.description-block {
			flex-direction: column;
		}

		div.description-block:nth-child(n) {
			margin-bottom: 10px;
		}

		form.primary-form {
			margin-top: 50px;
		}
	}

	@media (max-width: 820px) {
		#aboutusBlock div.offers-block {
			flex-direction: column;
		}

		.companies-list {
			display: flex;
			justify-content: center;
			flex-direction: column;
		}
	}
</style>


<section class="small-section">
	<div class="description-block">
		<h2>
			<?= $GLOBALS["locale"]["agencyDescription"]["mainDescription"] ?>
			<span class="red-text bold-text">
			Catalyst
			</span>
		</h2>
		<div class="secondary-description">
			<p><?= $GLOBALS["locale"]["agencyDescription"]["secondaryDescription"] ?></p>
			<a href="#aboutus" class="link-button"><?= $GLOBALS["locale"]["moreButton"] ?></a>
		</div>
	</div>
</section>
<section id="aboutusBlock" class="small-section">
	<a name="aboutus"></a>
	<div class="description-block offer-block">
		<h2>
			<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusBlockName"] ?>
		</h2>
		<div class="offers-block">
			<div>
				<h3>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusmainDescription1"] ?>
				</h3>
				<p>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutussecondDescription1"] ?>
				</p>
			</div>
			<div>
				<h3>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusmainDescription2"] ?>
				</h3>
				<p>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutussecondDescription2"] ?>
				</p>
			</div>
			<div>
				<h3>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusmainDescription3"] ?>
				</h3>
				<p>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutussecondDescription3"] ?>
				</p>
			</div>
			<div>
				<h3>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusmainDescription4"] ?>
				</h3>
				<p>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutussecondDescription4"] ?>
				</p>
			</div>
			<div>
				<h3>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutusmainDescription5"] ?>
				</h3>
				<p>
					<?= $GLOBALS["locale"]["aboutusDescription"]["aboutussecondDescription5"] ?>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="red-section-block big-section">
	<h2 style="font-size: 64px; color: #FFFFFF; text-align: center;"><?= $GLOBALS["locale"]["sections"]["companiestrustus"] ?></h2>
	<ul class="companies-list">
		<li>
			<svg width="300" height="150" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="1403.3298mm" height="274.44095mm" viewBox="0 0 4972.4286 972.42853" id="svg5522" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="Брусника.svg"><script xmlns=""/>
			<defs id="defs5524"/>
			<sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="0.175" inkscape:cx="1947.5808" inkscape:cy="59.460354" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" inkscape:window-width="1366" inkscape:window-height="705" inkscape:window-x="-4" inkscape:window-y="-4" inkscape:window-maximized="1" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0"/>
			<metadata id="metadata5527">
				<rdf:RDF>
				<cc:Work rdf:about="">
					<dc:format>image/svg+xml</dc:format>
					<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
					<dc:title/>
				</cc:Work>
				</rdf:RDF>
			</metadata>
			<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(3091.9287,376.70926)">
				<ellipse style="fill:#FFFFFF;fill-opacity:1;stroke:#FFFFFF;stroke-width:2.08041191;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" id="path3344" cx="-2616.147" cy="109.63897" rx="404.53101" ry="385.47299"/>
				<ellipse style="fill:#e10000;fill-opacity:1;stroke:#fdf5bb;stroke-width:1.31750166;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" id="path3344-9" cx="-2616.147" cy="109.63897" rx="256.18497" ry="244.11575"/>
				<circle style="fill:#FFFFFF;fill-opacity:1;stroke:#fdf5bb;stroke-width:0.49095115;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" id="path3344-9-9" cx="-2557.1238" cy="16.620464" r="93.188393"/>
				<path inkscape:connector-curvature="0" id="path6078" d="m -504.83956,248.01511 c -47.0713,-2.8167 -75.7175,-6.958 -104,-15.0347 -50.6177,-14.455 -83.9948,-38.1062 -100.0313,-70.8827 -6.3399,-12.9579 -9.0863,-22.8411 -10.4933,-37.7613 -1.9821,-21.0176 1.5842,-41.102396 10.5185,-59.238696 23.7158,-48.1423 83.7609,-76.1648 180.0061,-84.0071 22.4605,-1.8302 73.9244,-2.1006 96.5777,-0.5075 87.635,6.1629 143.6629,28.5836006 168.3976,67.3877 3.6348,5.7024 8.9079,16.5831 8.3171,17.162 -0.4785,0.4688 -93.0127,18.5818 -93.2865,18.2603 -0.1384,-0.1625 -1.0319,-1.8286 -1.9857,-3.7026 -2.5783,-5.0658 -10.2559,-12.9126 -16.8001,-17.1705 -22.4398,-14.6 -62.8487,-20.9654 -124.2201,-19.5677 -74.884,1.7054 -114.6113,13.803 -131.6981,40.1039 -5.7761,8.891 -8.1868,17.865696 -8.2037,30.541496 -0.023,17.637 4.8268,29.4 16.8198,40.7921 15.2619,14.4974 38.8399,22.8295 78.582,27.77 17.1557,2.1326 75.665,3.0645 95.7485,1.5249 41.2049,-3.1587 67.467,-11.3401 81.5858,-25.4166 3.404,-3.3937 7.2278,-8.3079 8.4975,-10.9204 1.2697,-2.6125 2.5881,-4.75 2.9298,-4.75 0.9524,0 90.7017,17.241 91.0014,17.4815 0.727,0.5835 -5.5841,12.9715 -10.2733,20.1653 -24.1976,37.1225 -75.047,58.6761 -155.4897,65.9077 -15.6791,1.4096 -69.6941,2.6293 -82.5,1.8629 z m -1539.83314,-5.0841 c -0.3667,-0.3666 -0.6667,-58.6416 -0.6667,-129.5 l 0,-128.833296 198,0 198,0 0,29.9969 0,29.9969 -156.25,0.2531 -156.25,0.2531 0,19 0,19 129.5,0.5471 c 126.9631,0.5364 129.6763,0.5882 138.5,2.644 37.1153,8.6473 58.9842,28.550396 65.0773,59.227496 2.264,11.3983 1.5249,31.4381 -1.5516,42.0743 -6.8786,23.7805 -25.2673,41.4202 -51.5257,49.4267 -10.9552,3.3404 -16.994,4.4253 -31,5.5689 -13.4472,1.098 -330.7504,1.4277 -331.8333,0.3448 z m 320.4186,-60.0935 c 8.8719,-3.5903 12.9147,-9.5563 12.9147,-19.0585 0,-9.7364 -4.4973,-16.6624 -12.9342,-19.9189 -4.2668,-1.647 -12.1957,-1.7624 -121.0658,-1.7624 l -116.5,0 -0.2708,20.9281 c -0.208,16.0684 0.024,21.1192 1,21.7509 0.6989,0.4526 53.0208,0.7099 116.2708,0.5719 l 115,-0.2509 z m 151.9147,-68.7398 0,-129.499996 152.0394,0 c 99.7188,0 155.3811,0.3626 161.75,1.0537 44.4798,4.8268006 76.2926,23.1991006 91.6465,52.9271 14.6429,28.3512 13.5646,67.880896 -2.5813,94.635496 -12.3469,20.4595 -33.9945,35.4113 -62.0999,42.8919 -22.1683,5.9003 -20.4775,5.8258 -141.2109,6.2236 -77.0729,0.254 -111.3513,0.6935 -112.25,1.4393 -1.0047,0.8338 -1.2938,7.639 -1.2938,30.4513 l 0,29.3776 -43,0 -43,0 z m 301.4568,2.1258 c 12.3979,-3.7384 19.8489,-9.3755 23.6389,-17.884196 1.911,-4.2902 2.3366,-6.9659 2.3451,-14.7416 0.012,-11.0497 -2.0674,-16.9383 -8.2402,-23.3347 -4.6071,-4.7741 -9.2187,-7.1848 -19.0315,-9.9484 -7.5912,-2.138 -8.698,-2.1632 -108.902,-2.4827 -71.127,-0.2269 -101.8328,0 -103.25,0.7567 -1.9607,1.0493 -2.0171,2.009 -2.0171,34.3443 0,25.002396 0.3057,33.570496 1.2308,34.495596 0.9628,0.9628 23.7779,1.1612 104.75,0.911 96.1786,-0.2971 103.9416,-0.4472 109.476,-2.116 z m 230.5432,126.5682 c 0,-0.4433 14.8383,-16.9808 32.9741,-36.75 18.13554,-19.7692 32.98554,-36.6605 32.99984,-37.5363 0.022,-1.3717 -53.94314,-55.5698 -156.47394,-157.148296 l -27,-26.7492 51.7262,-0.01 51.7261,-0.01 65.03654,63.75 c 35.7701,35.0625 65.8874,63.888096 66.9273,64.056896 1.3972,0.2268 17.1065,-16.414396 60.18,-63.749996 l 58.2893,-64.0569 50.5102,0 50.5101,0 -3.5675,3.75 c -1.9622,2.0625006 -53.8481,59.1 -115.302,126.749996 -61.4539,67.65 -113.047,124.2375 -114.6512,125.75 l -2.9168,2.75 -50.4842,0 c -27.76614,0 -50.48404,-0.3627 -50.48404,-0.806 z m 830.99984,-128.694 0,-129.499996 43,0 43,0 0,46.4648 c 0,44.915 0.064,46.4994 1.9343,47.5 2.0951,1.1213 272.5822,1.5417 275.4839,0.4282 1.4113,-0.5415 1.5818,-5.6622 1.5818,-47.5 l 0,-46.893 43,0 43,0 0,129.510696 0,129.5108 -42.75,-0.2608 -42.75,-0.2607 -0.2595,-49.4469 c -0.1997,-38.0322 -0.5459,-49.6287 -1.5,-50.2347 -1.944,-1.2345 -273.4932,-1.0211 -275.8062,0.2168 -1.8724,1.002 -1.9343,2.619 -1.9343,50.5 l 0,49.4648 -43,0 -43,0 z m 522,0 0,-129.499996 42.9946,0 42.9946,0 0.2554,88.7364 c 0.2317,80.495796 0.4043,88.764996 1.8587,89.044996 0.8818,0.1698 61.075,-39.7615 133.7625,-88.736296 l 132.1592,-89.0451 43.9875,0 43.9875,0 0,129.499996 0,129.5 -43,0 -43,0 0,-88.3776 c 0,-77.887796 -0.1806,-88.527396 -1.5213,-89.640096 -1.2757,-1.0587 -3.3338,-0.053 -12.75,6.2296 -6.1758,4.1207 -66.0857,44.458796 -133.1332,89.640196 l -121.9046,82.1479 -43.3454,0 -43.3455,0 z m 509.6667,128.8333 c -0.3667,-0.3666 -0.6667,-58.6416 -0.6667,-129.5 l 0,-128.833296 43,0 43,0 0,53.3776 c 0,46.5722 0.1941,53.5386 1.5222,54.6408 1.2718,1.0555 4.8484,-0.4309 21.75,-9.0395 11.1253,-5.6665 59.3041,-30.2548 107.06416,-54.6408 l 86.8361,-44.3381 68.6639,0.074 68.6638,0.074 -119.5,59.6757 c -97.0186,48.449 -119.5,60.040196 -119.5,61.613296 0,1.542 25.0574,15.6312 122.7153,69 67.4934,36.8843 122.7309,67.3999 122.75,67.8124 0.019,0.4125 -32.8376,0.75 -73.015,0.75 -65.5043,0 -73.3802,-0.1681 -76.25,-1.6278 -1.7601,-0.8953 -49.1665,-26.7703 -105.3473,-57.5 -56.18106,-30.7291 -102.82046,-55.8716 -103.64316,-55.8716 -0.8228,0 -1.7692,0.7118 -2.103,1.5818 -0.3339,0.87 -0.607,26.745 -0.607,57.5 l 0,55.9182 -42.3333,0 c -23.2834,0 -42.6334,-0.3 -43,-0.6667 z m 456.52676,-1.1955 c 0.7187,-1.0242 47.8817,-59.2869 104.8067,-129.4727 l 103.5,-127.610396 46,0.023 46,0.023 103.9191,128.199896 c 57.1554,70.5099 104.1068,128.7665 104.3364,129.4591 0.3326,1.0035 -9.9033,1.2066 -50.4044,1 l -50.8217,-0.2592 -17.5735,-22.5 -17.5735,-22.5 -118.9412,-0.237 c -65.4177,-0.1304 -119.4308,0.095 -120.0291,0.5 -0.5984,0.4053 -8.4132,10.187 -17.3663,21.737 -8.9531,11.55 -16.987,21.5625 -17.8532,22.25 -1.2113,0.9615 -12.8546,1.25 -50.4404,1.25 -47.4614,0 -48.8281,-0.053 -47.5589,-1.8622 z m 323.5902,-104.2519 c 0.175,-0.9088 -14.7174,-21.0101 -34.0799,-45.999996 -28.2633,-36.4778 -34.8152,-44.3859 -36.7738,-44.3859 -1.9552,0 -8.5376,7.8971 -36.6565,43.9782 -18.8503,24.188096 -34.2733,44.700596 -34.2733,45.583396 0,0.8828 0.303,1.9081 0.6734,2.2784 0.3703,0.3704 32.2017,0.5579 70.7363,0.4167 63.5576,-0.2329 70.0919,-0.4066 70.3738,-1.8708 z" style="fill:#FFFFFF;fill-opacity:1" sodipodi:nodetypes="ssssssssccsssscssscsscssscscccccccccssssssccscscscsccccsssssscsccccsssssscsssscscscccsssccccsscsccccccsccscccccccsccsccccccccscscccccccsccscccccscccsssscccssscscsscscsccscccscscccscscscccsssscsc"/>
			</g>
			<script xmlns=""/></svg>
		</li>
		<li>
			<svg width="128" height="100" aria-hidden="true" viewBox="0 0 58 43" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="11" y="10" width="42" height="28" fill="#e10000"></rect><path fill-rule="evenodd" clip-rule="evenodd" d="M57.6487 42.9585V0C38.0324 0.91401 16.8021 2.5343 0 5.19324L7.15952 17.4908V42.9585H57.6487ZM40.9707 11.0928H43.9504L46.4334 22.0193L48.9165 11.0928H51.8962V36.6019H48.9165V27.8773L48.9993 20.2744H48.751L47.0128 31.4502H45.8127L44.0745 20.2744H43.8676L43.9504 27.8773V36.6019H40.9707V11.0928ZM30.5004 14.7072C30.5004 12.256 32.1558 10.7188 34.6802 10.7188C37.1633 10.7188 38.8601 12.256 38.8601 14.7072V33.029C38.8601 35.4802 37.2047 37.0174 34.6802 37.0174C32.1972 37.0174 30.5004 35.4802 30.5004 33.029V14.7072ZM29.7969 11.0928L29.5486 14.0841H27.3552V36.6019H24.0858V14.0841H21.9338L21.6855 11.0928H29.7969ZM14.8157 11.0928H20.3198L22.2235 36.6019H19.0369L18.7058 31.201H16.3469L16.0158 36.6019H12.8292L14.8157 11.0928ZM17.7126 14.0841H17.4229L16.5952 28.4589H18.5403L17.7126 14.0841ZM35.6735 33.029C35.6735 33.6106 35.2596 34.0261 34.6802 34.0261C34.0595 34.0261 33.687 33.6106 33.687 33.029V14.7072C33.687 14.1256 34.1009 13.7101 34.6802 13.7101C35.2596 13.7101 35.6735 14.1256 35.6735 14.7072V33.029Z" fill="#FFFFFF"></path></svg>
		</li>
		<li>
			<svg width="200" height="100" viewBox="0 0 400 100" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
				<path d="M132.909 63.273C132.909 64.7296 131.728 65.9103 130.272 65.9103H103.731C102.275 65.9103 101.094 64.7296 101.094 63.273V36.7308C101.094 35.2741 102.275 34.0934 103.731 34.0934H130.272C131.728 34.0934 132.909 35.2741 132.909 36.7308V63.273ZM133.644 25H100.355C95.7409 25 92 28.74 92 33.3552V66.6433C92 71.2576 95.7409 74.9999 100.355 74.9999H133.644C138.259 74.9999 142.001 71.2576 142.001 66.6433V33.3552C142.001 28.74 138.259 25 133.644 25Z" fill="#FFFFFF"/>
				<path d="M111.694 56.7848C110.855 56.7848 110.181 56.104 110.181 55.2644V44.6695C110.181 43.8285 110.855 43.1477 111.694 43.1477H122.305C123.142 43.1477 123.818 43.8285 123.818 44.6695V55.2644C123.818 56.104 123.142 56.7848 122.305 56.7848H111.694Z" fill="#FFFFFF"/>
				<path d="M155.255 56.0626H160.714C160.987 59.1562 163.08 61.5671 167.311 61.5671C171.086 61.5671 173.406 59.702 173.406 56.8813C173.406 54.2429 171.587 53.0599 168.311 52.2868L164.081 51.3768C159.486 50.3759 156.028 47.4188 156.028 42.5968C156.028 37.2739 160.759 33.6345 166.901 33.6345C173.406 33.6345 177.592 37.0466 177.956 42.0963H172.679C172.042 39.7307 170.086 38.3202 166.901 38.3202C163.534 38.3202 161.215 40.14 161.215 42.4602C161.215 44.7804 163.216 46.1906 166.674 46.964L170.859 47.874C175.454 48.8747 178.593 51.6497 178.593 56.5174C178.593 62.7044 173.952 66.3894 167.311 66.3894C159.85 66.3894 155.71 62.3405 155.255 56.0626Z" fill="#FFFFFF"/>
				<path d="M198.304 54.5211C198.304 49.9254 195.493 47.2485 192.057 47.2485C188.622 47.2485 185.811 49.9254 185.811 54.5211C185.811 59.1167 188.622 61.7936 192.057 61.7936C195.493 61.7936 198.304 59.1167 198.304 54.5211ZM198.125 75.0003V65.9432L198.482 61.9723H198.125C196.876 64.8276 194.243 66.3892 190.674 66.3892C184.918 66.3892 180.635 61.7046 180.635 54.5211C180.635 47.3375 184.918 42.6529 190.674 42.6529C194.199 42.6529 196.698 44.3036 198.125 46.8915H198.482V43.099H203.212V75.0003H198.125Z" fill="#FFFFFF"/>
				<path d="M206.989 56.8856V43.0988H212.076V56.4395C212.076 60.0534 213.816 61.7934 216.716 61.7934C220.285 61.7934 222.605 59.2503 222.605 55.2794V43.0988H227.692V65.943H222.962V61.2135H222.605C221.49 64.2475 219.036 66.389 215.243 66.389C209.8 66.389 206.989 62.909 206.989 56.8856Z" fill="#FFFFFF"/>
				<path d="M245.384 56.7519V55.5473L240.253 55.9043C237.487 56.0827 236.237 57.109 236.237 59.1612C236.237 60.9015 237.665 62.1506 239.673 62.1506C243.287 62.1506 245.384 59.8304 245.384 56.7519ZM230.794 59.5627C230.794 55.2796 233.784 52.781 239.093 52.4685L245.384 52.067V50.2825C245.384 48.1409 243.822 46.847 241.056 46.847C238.513 46.847 236.996 48.1409 236.594 49.97H231.508C232.044 45.3298 235.881 42.6529 241.056 42.6529C246.901 42.6529 250.471 45.1515 250.471 49.97V65.9432H245.741V61.7046H245.384C244.313 64.5154 242.082 66.3892 237.799 66.3892C233.694 66.3892 230.794 63.623 230.794 59.5627Z" fill="#FFFFFF"/>
				<path d="M254.256 65.9426V43.0984H258.986V47.4711H259.343C260.012 44.4817 262.287 43.0984 265.678 43.0984H267.998V47.694H265.098C261.797 47.694 259.343 49.8359 259.343 53.8961V65.9426H254.256Z" fill="#FFFFFF"/>
				<path d="M286.415 51.9329C286.236 48.7651 283.604 46.6235 280.391 46.6235C277.357 46.6235 274.814 48.5419 274.189 51.9329H286.415ZM291.278 55.4577H273.922C274.189 59.6518 277.134 62.0165 280.391 62.0165C283.157 62.0165 284.898 60.9009 285.879 59.0271H290.921C289.538 63.6672 285.478 66.389 280.347 66.389C273.609 66.389 268.88 61.3473 268.88 54.5208C268.88 47.6943 273.743 42.6523 280.391 42.6523C287.084 42.6523 291.456 47.248 291.456 52.9592C291.456 54.0745 291.367 54.6546 291.278 55.4577Z" fill="#FFFFFF"/>
			</svg>
		</li>
	</ul>

	<ul class="companies-list">
		<li>
			<svg width="120" height="120" viewBox="0 0 2000 2000" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="1000" cy="1000" r="1000"></circle><path fill="none" stroke="#e10000" stroke-linecap="round" stroke-linejoin="round" stroke-width="80" d="M680.39 725.61l319.58 1003.6-474.21-297.14 154.63-706.46L999.97 289v306.23l-474.21 836.84h948.9l-474.21-836.84V289l319.58 436.61 154.63 706.46-474.21 297.14 319.58-1003.6"></path></g></svg>
		</li>

		<li>
			<svg width="120" height="120" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m15.209.014c-.097-.009-.21-.014-.324-.014-.689 0-1.336.18-1.896.495l.019-.01c-.924.476-1.617 1.29-1.923 2.274l-.007.027v.068l-.035.237-.135-.237-.338-.606c-.458-.767-1.18-1.336-2.038-1.585l-.025-.006c-.208-.058-.448-.091-.695-.091-.477 0-.925.123-1.313.34l.014-.007c-.7.455-1.183 1.194-1.285 2.051l-.001.013c-.039.219-.061.471-.061.728 0 .789.21 1.528.577 2.166l-.011-.021.238.339-.815-.269c-.284-.073-.61-.114-.946-.114-.722 0-1.399.192-1.983.528l.019-.01c-.915.462-1.619 1.232-1.983 2.172l-.009.028c-.162.359-.256.777-.256 1.218 0 .546.145 1.059.398 1.502l-.008-.015c.202.35.462.643.772.875l.007.005c.401.391.924.659 1.507.741l.014.002.236.067-.505.442c-.42.372-.738.852-.908 1.397l-.006.022c-.057.188-.089.403-.089.627 0 .431.122.834.333 1.176l-.006-.01c.151.273.354.5.599.672l.006.004c.271.245.622.405 1.009.44h.007c.302.075.649.118 1.005.118.487 0 .956-.08 1.393-.227l-.031.009-.606 1.009-.17.44c-.125.357-.197.769-.197 1.198 0 .666.174 1.291.479 1.832l-.01-.019c.247.381.502.713.783 1.022l-.006-.006c.421.364.934.635 1.499.772l.025.005c.35.109.752.172 1.168.172.671 0 1.304-.163 1.862-.452l-.023.011c.906-.493 1.577-1.319 1.856-2.31l.006-.027.032-.202c.49.621 1.146 1.091 1.901 1.344l.029.008c.221.08.476.127.743.127.454 0 .876-.135 1.228-.367l-.008.005c.582-.367 1.008-.936 1.181-1.606l.004-.019c.081-.351.127-.753.127-1.167s-.046-.816-.134-1.203l.007.036c.308.224.669.398 1.06.5l.022.005c.376.143.81.226 1.263.226.627 0 1.218-.158 1.733-.437l-.019.01c.894-.511 1.553-1.346 1.821-2.342l.006-.027c.101-.33.16-.71.16-1.104 0-.674-.171-1.307-.473-1.86l.01.02-.172-.273c-.248-.428-.565-.788-.94-1.076l-.009-.006c-.317-.206-.682-.399-1.065-.558l-.046-.017c.966-.411 1.719-1.165 2.12-2.106l.01-.026c.089-.236.141-.509.141-.794 0-.43-.117-.832-.322-1.177l.006.011v-.063c-.387-.668-1.02-1.157-1.772-1.346l-.02-.004c-.319-.058-.687-.091-1.063-.091-.185 0-.369.008-.55.024l.024-.002-1.118.237.373-.846c.123-.355.195-.764.195-1.19 0-.71-.198-1.374-.542-1.939l.009.016-.101-.172c-.499-.816-1.3-1.407-2.243-1.619l-.024-.004c-.223-.062-.487-.109-.758-.133l-.017-.001zm-.575 1.427c.061-.006.131-.009.202-.009.278 0 .544.052.789.146l-.015-.005c.662.128 1.209.539 1.518 1.099l.006.011c.17.339.27.739.27 1.162v.022-.001l-.101.745c-.139.386-.31.719-.515 1.026l.011-.017-3.044 3.724c-.284-.21-.606-.402-.947-.561l-.035-.014-.339-3.825-.033-1.352.032-.338c.192-.67.644-1.211 1.238-1.516l.014-.006c.274-.159.598-.267.943-.302l.01-.001zm-6.947.542h.003c.15 0 .292.037.416.103l-.005-.002c.704.235 1.254.761 1.516 1.433l.006.017c.18.312.319.675.4 1.059l.004.024.676 3.994-.505.17-3.012-3.282-.17-.337c-.239-.455-.379-.993-.379-1.564 0-.081.003-.161.008-.24l-.001.011c0-.011 0-.024 0-.037 0-.51.268-.957.671-1.209l.006-.003c.098-.081.225-.13.363-.131zm12.243 5.08h.012c.155 0 .308.009.458.026l-.018-.002c.511.028.948.319 1.18.74l.004.007.136.437-.068.338c-.311.681-.875 1.202-1.568 1.449l-.019.006c-.323.148-.699.255-1.092.301l-.018.002-4.161.505-.068-.237-.069-.101.136-.169 3.418-2.842.404-.168c.394-.182.854-.29 1.339-.293h.001zm-15.605.185c.18.01.349.037.512.08l-.018-.004.916.37 2.977 2.169c-.236.287-.421.627-.535.997l-.006.021-4.873.606-.337-.067c-.561-.062-1.031-.399-1.279-.87l-.004-.009c-.134-.239-.213-.525-.213-.829 0-.251.054-.49.151-.705l-.004.011c.223-.643.696-1.15 1.299-1.414l.015-.006c.368-.221.812-.352 1.287-.352.04 0 .079.001.119.003h-.006zm7.226 2.715h.027c.593 0 1.132.231 1.532.607l-.001-.001c.419.39.681.944.681 1.559v.037-.002c.001.024.002.052.002.08 0 .599-.261 1.138-.676 1.507l-.002.002c-.39.417-.943.676-1.557.676h-.001c-.014 0-.03.001-.046.001-.609 0-1.157-.26-1.54-.675l-.001-.001c-.417-.392-.676-.946-.676-1.562 0-.01 0-.019 0-.029v.001c.006-.623.264-1.185.676-1.59.409-.376.956-.606 1.557-.606h.033-.002zm8.497 2.604.339.035c.538.158.977.508 1.246.969l.005.01c.315.368.506.849.506 1.375 0 .029-.001.057-.002.086v-.004l-.101.676c-.145.646-.57 1.171-1.138 1.448l-.012.006c-.321.195-.71.311-1.126.311-.276 0-.54-.051-.784-.144l.015.005c-.366-.081-.678-.273-.907-.539l-.002-.002-3.553-2.945.237-.505.101-.404 3.823-.338 1.352-.035zm-6.698 2.47 1.42 1.453.878 1.083.172.34c.26.431.414.951.414 1.507 0 .088-.004.176-.012.262l.001-.011c.001.014.001.031.001.048 0 .497-.27.932-.671 1.165l-.006.003c-.157.101-.349.16-.554.16-.079 0-.156-.009-.23-.026l.007.001c-.712-.24-1.266-.782-1.517-1.47l-.005-.017-.404-1.118-.505-2.944.573-.202.44-.237zm-3.654.069c.302.179.656.309 1.033.368l.017.002c.067 1.151.167 2.369.335 3.688v1.354l-.033.336c-.221.617-.667 1.107-1.237 1.381l-.015.006c-.348.204-.767.325-1.214.325-.231 0-.454-.032-.665-.092l.017.004c-.637-.144-1.158-.554-1.448-1.104l-.006-.012c-.18-.333-.29-.728-.303-1.147v-.004l.172-.777c.076-.373.255-.696.505-.949l2.842-3.381z"></path></g></svg>
		</li>

		<li>
			<svg width="120" height="120" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.4 3.4C2 4.81333 2 7.07333 2 11.6V12.4C2 16.92 2 19.18 3.4 20.6C4.81333 22 7.07333 22 11.6 22H12.4C16.92 22 19.18 22 20.6 20.6C22 19.1867 22 16.9267 22 12.4V11.6C22 7.08 22 4.82 20.6 3.4C19.1867 2 16.9267 2 12.4 2H11.6C7.08 2 4.82 2 3.4 3.4ZM5.37333 8.08667C5.48 13.2867 8.08 16.4067 12.64 16.4067H12.9067V13.4333C14.58 13.6 15.8467 14.8267 16.3533 16.4067H18.72C18.4773 15.5089 18.0469 14.6727 17.4574 13.9533C16.8679 13.234 16.1326 12.6478 15.3 12.2333C16.0461 11.779 16.6905 11.1756 17.1929 10.461C17.6953 9.7464 18.045 8.93585 18.22 8.08H16.0733C15.6067 9.73334 14.22 11.2333 12.9067 11.3733V8.08667H10.7533V13.8467C9.42 13.5133 7.74 11.9 7.66666 8.08667H5.37333Z" fill="#ffffff"></path> </g></svg>
		</li>
	</ul>
</section>

<section class="big-section">
	<a name="form"></a>
	<div class="description-block offer-block" id="contactForm">
		<div>
			<h2>
				<?= $GLOBALS["locale"]["agencyDescription"]["formBlockName"] ?>
			</h2>
		</div>
		<div>
		</div>
		<div>
			<form class="primary-form" method="POST" action="/register">
				<input type="text" name="name" placeholder="<?= $GLOBALS["locale"]["placeholders"]["name"] ?>">
				<input type="text" name="company" placeholder="<?= $GLOBALS["locale"]["placeholders"]["company"] ?>">
				<input type="email" name="email" placeholder="<?= $GLOBALS["locale"]["placeholders"]["email"] ?>">
				<button class="button-primary button-secondary"><?= $GLOBALS["locale"]["placeholders"]["contactButton"] ?></button>
			</form>
		</div>
	</div>
</section>