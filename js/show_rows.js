$(document).ready(function () {
  getPagination('#Tabla');
  $('#maxRows option:First').prop('selected', true).trigger('change');
});

function getPagination(table) {

  $('#maxRows').on('change', function(e) {
    $('.pagination').html(''); // reset pagination
    var trnum = 0; // reset tr counter
    var maxRows = parseInt($(this).val()); // get Max Rows from select option
    var totalRows = $(table + ' tbody tr').length; // numbers of rows
    $(table + ' tr:gt(0)').each(function() { // each TR in  table and not the header
      trnum++; // Start Counter
      if (trnum > maxRows) { // if tr number gt maxRows

        $(this).hide(); // fade it out
      }
      if (trnum <= maxRows) {
        $(this).show();
      } // else fade in Important in case if it ..
    }); //  was fade out to fade it in
    if (totalRows > maxRows) { // if tr total rows gt max rows option
      var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
      //	numbers of pages
      for (var i = 1; i <= pagenum;) { // for each page append pagination li
        $('.pagination').append('<li class"wp" data-page="' + i + '">\
<span>' + i++ + '<span class="sr-only">(current)</span></span>\
</li>').show();
      } // end for i
    } // end if row count > max rows
    $('.pagination li:first-child').addClass('active'); // add active class to the first li
    $('.pagination li').on('click', function() { // on click each page
      var pageNum = $(this).attr('data-page'); // get it's number
      var trIndex = 0; // reset tr counter
      $('.pagination li').removeClass('active'); // remove active class from all li
      $(this).addClass('active'); // add active class to the clicked
      $(table + ' tr:gt(0)').each(function() { // each tr in table not the header
        trIndex++; // tr index counter
        // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
        if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
          $(this).hide();
        } else {
          $(this).show();
        } //else fade in
      }); // end of for each tr in table
    }); // end of on click pagination list


  });

  // end of on select change



  // END OF PAGINATION
}