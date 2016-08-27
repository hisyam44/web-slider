<div class="slide">
	<div class="slider">
		<img src="http://localhost/visit/5ea63f912c239b124a52f847a2d7e72d4215500f-4ee3d.jpg">
		<img src="http://localhost/visit/f387e367ac97b4995dd9ba88e0d5cffa3006e8e9-f6abc.jpg">
		<img src="http://localhost/visit/060162620f736554667b6af2f6a76c6f466a7873-a9de5.jpg">
	</div>
	<div class="tagline">
		<span>Visit Indonesia</span>
		<span>Found The New Adventure</span>
		<span>Taste The New Experiences</span>
	</div>
	<img src="http://localhost/visit/5ea63f912c239b124a52f847a2d7e72d4215500f-4ee3d.jpg">
</div>
<div class="row">
	<div class="container space">
			<div class="col-3 col-sl-6">
				<div class="box">
					<div class="img">
						<img src="http://localhost/visit/TLM_1161[2].png">
					</div>
					<div class="text">
						<div class="panel">
							<div class="panel-header">Uluwatu</div>
							<div class="panel-body">Uluwatu is the most famous wave of Bali. There is always some swell here so it's also always crowded. The spot offers several waves which are working with different swells and tides.</div>
						</div>	
					</div>
				</div>	
			</div>
			<div class="col-3 col-sl-6">
				<div class="box">
					<div class="img">
						<img src="http://localhost/visit/TLM_1161[2].png">
					</div>
					<div class="text">
						<div class="panel">
							<div class="panel-header">Uluwatu</div>
							<div class="panel-body">Uluwatu is the most famous wave of Bali. There is always some swell here so it's also always crowded. The spot offers several waves which are working with different swells and tides.</div>
						</div>	
					</div>
				</div>	
			</div>
			<div class="col-3 col-sl-6">
				<div class="box">
					<div class="img">
						<img src="http://localhost/visit/TLM_1161[2].png">
					</div>
					<div class="text">
						<div class="panel">
							<div class="panel-header">Uluwatu</div>
							<div class="panel-body">Uluwatu is the most famous wave of Bali. There is always some swell here so it's also always crowded. The spot offers several waves which are working with different swells and tides.</div>
						</div>	
					</div>
				</div>	
			</div>
			<div class="col-3 col-sl-6">
				<div class="box">
					<div class="img">
						<img src="http://localhost/visit/TLM_1161[2].png">
					</div>
					<div class="text">
						<div class="panel">
							<div class="panel-header">Uluwatu</div>
							<div class="panel-body">Uluwatu is the most famous wave of Bali. There is always some swell here so it's also always crowded. The spot offers several waves which are working with different swells and tides.</div>
						</div>	
					</div>
				</div>	
			</div>
	</div>
</div>
<div class="row">
	<div class="container space">
		<div class="col-4">
			<div class="panel">
				<div class="panel-header panel-main">About</div>
				<div class="panel-body">
				The Republic of Indonesia is the largest archipelago in the world comprising 13,466 large and small tropical islands fringed with white sandy beaches, many still uninhabited and a number even still unnamed. Straddling the equator, situated between the continents of Asia and Australia and between the Pacific and the Indian Oceans, it is as wide as the United States from San Francisco to New York, equaling the distance between London and Moscow.  Indonesia has a total population of more than 215 million people from more than 200 ethnic groups. The national language is Bahasa Indonesia.

Among the most well known islands are Sumatra, Java, Bali, Kalimantan (formerly Borneo), Sulawesi (formerly Celebes), the Maluku Islands (or better known as Moluccas, the original Spice Islands) and Papua. Then, there is Bali “the world's best island resort” with its enchanting culture, beaches, dynamic dances and music. But Indonesia still has many unexplored islands with grand mountain views, green rainforests to trek through, rolling waves to surf and deep blue pristine seas to dive in where one can swim with dugongs, dolphins and large mantarays.  
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="panel">
				<div class="panel-header panel-main">Photos</div>
				<div class="panel-body">
	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row" style="background:url('http://localhost/visit/TLM_1161[2].png') no-repeat;background-size:100%;">
	<div class="container space">
		<div class="col-4">
			<div class="panel">
				<div class="panel-header">Contact Us</div>
				<div class="panel-body">The Republic of Indonesia is the largest archipelago in the world comprising 13,466 large and small tropical islands fringed with white sandy beaches, many still uninhabited and a number even still unnamed.</div>
			</div>
		</div>
		<div class="col-4">
			<div class="panel">
				<div class="panel-header">About</div>
				<div class="panel-body">The Republic of Indonesia is the largest archipelago in the world comprising 13,466 large and small tropical islands fringed with white sandy beaches, many still uninhabited and a number even still unnamed.</div>
			</div>
		</div>
		<div class="col-4">
			<div class="panel">
				<div class="panel-header">About</div>
				<div class="panel-body">The Republic of Indonesia is the largest archipelago in the world comprising 13,466 large and small tropical islands fringed with white sandy beaches, many still uninhabited and a number even still unnamed.</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container space">
		<div class="footer">sd.fkjsdlkfjn sdljkfhnsd ljfnsdjkfnlsdjfhn dlfhlsd hflkdsjh</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('.slider img:gt(0)').hide();
		$('.tagline span:gt(0)').hide();
			var text = " ";
		setInterval(function (){
			var first = $('.slider :first-child');
			var tag = $('.tagline :first-child');
			first.fadeOut("slow");
			tag.fadeOut("slow");
			first.next('img').fadeIn("slow");
			tag.next('span').fadeIn("slow");
			first.appendTo('.slider');
			tag.appendTo('.tagline');
		},3000);
	});
</script>