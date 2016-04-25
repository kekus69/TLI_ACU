$(function() {
  var $allRows = $('tbody').find('tr'),
      $filteredSet = $allRows,
      $filterInput = $('.filters input:first');

  $('.filters input').on('keyup', $.debounce(300, function(e){
    var $this = $(this),
        attr = 'data-'+$this.attr('id'),
        value = $this.val();

    if (this.value !== '') {
      if ($filteredSet.length == 0) {
        $filteredSet = $allRows;
      }
      $filteredSet.hide();
      $filteredSet = $filteredSet
        .filter('['+attr+'*="'+value.toLowerCase()+'"]')
        .show();
      
    } else {
      $filteredSet = $allRows;
      $this.siblings().each(function() {
        var $this = $(this),
            attr = 'data-'+$this.attr('id'),
            value = $this.val();

        if (value !== '') {
          $filteredSet.hide();
          $filteredSet = $filteredSet
            .filter('['+attr+'*="'+value.toLowerCase()+'"]')
            .show();
        }
      });
      if ($('.filters input').filter(function() { return this.value; }).length == 0) {
        $filteredSet = $allRows;
        $filteredSet.show();
      }
    }
  }));

  $('.filters a').on('click', function() {
    var $this = $(this);
    
    $filterInput.val('').trigger('keyup');
    var t = window.setTimeout(function() {
      $filterInput.val($this.attr('id')).trigger('keyup');
      window.clearTimeout(t);
    }, 500);
    return false;
  });

  $('.filters button').on('click', function() {
    $('.filters input').each(function() {
      var $this = $(this);
      $this.val('');
    });
    $filterInput.trigger('keyup');
  });
});
