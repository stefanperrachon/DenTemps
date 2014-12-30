  $(function() {
    var availableTags = [
	
      "1 day a week",
      "2 days a week",
      "3 days a week",
      "4 days a week",
      "5 days a week",
      "Saturdays",
      "Mondays",
      "Tuesdays",
      "Wednesdays",
      "Thursdays",
      "Fridays",
      "Mondays & Tuesdays",
      "Mondays & Wednesdays",
      "Mondays & Thursdays",
      "Mondays & Fridays",
      "Tuesdays & Wednesdays",
      "Tuesdays & Thursdays",
      "Tuesdays & Fridays",
      "Wednesdays & Thursdays",
      "Wednesdays & Fridays",
      "Thursdays & Fridays",
      "Surgery Leave",
	  "Maternity Leave",
	  "Long Term Temp Position",
	  "Part Time",
	  "Full Time"
    ];
	
    $( "#durationfield" ).autocomplete({
      source: availableTags
    });
	
  });