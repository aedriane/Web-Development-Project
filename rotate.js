window.onload = rotate;

var picIndex = 3;

function rotate()
{
	var images = [
					"bannerImages/darksouls3banner.png",	//index 0  
					"bannerImages/farcryprimalbanner.png",	//index 1
					"bannerImages/gta5banner.png",	//index 2
					"bannerImages/thedivisionbanner.png"	//index 3
				];
							
	picIndex++;
	if(picIndex == images.length)
	{
		picIndex = 0;
	}
	
	document.getElementById("banner").src = images[picIndex];
	
	setTimeout(rotate, 10000);
}