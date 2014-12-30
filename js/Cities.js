  $(function() {
    var availableTags = [
	
"Cary",
"Raleigh",
"Durham",
"Fayetteville",
"North Raleigh",
"Sanford",
"Wilson",
"Chapel Hill",
"Wake Forest",
"Pittsboro",
"Zebulon",
"Fuquay Varina",
"Garner",
"Clayton",
"Rocky Mount",
"Nashville",
"Burlington",
"Henderson",
"Greensboro",
"Greenville",
"Wilmington",
"Youngsville",
"Creedmoor",
"Cary-Preston",
"Holly Spring",
"Spring Lake",
"Lumberton",
"Graham",
"Goldsboro",
"Kinston",
"Smithfield",
"Knightdale",
"Wendell",
"Selma",
"Benson",
"Dunn",
"Lillington",
"Broadway",
"Mebane",
"Apex",
"Rockingham",
"Clinton",
"Bunn",
"Yanceyville",
"Roxboro",
"Morrisville",
"Laurinburg"



    ];
	
    $( "#locationfield" ).autocomplete({
      source: availableTags
    });
	
  });