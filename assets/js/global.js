
// jquery Dropdown

$(document).ready(function(){"use strict";
	$(".post-header").click(function () {
		$(this).parent().next().slideToggle('fast');
		$(this).children().last().toggleClass('open');
    });
});
