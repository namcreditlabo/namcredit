            var leftStore;
            $('.style-switcher').click(function(e) {
                var leftPos = $(this).offset().left*-1;
                if (leftPos > 0 ) {
                    $(this).animate({
                        left: '0'
                    });
                    leftStore = leftPos *-1;
                }else {
                    $(this).animate({
                        left: leftStore
                    });
                }

               
            });
             loc = $(location).attr('pathname');
                $('.color-wrp a').each(function(index, el) {
                    clrIndex =$(this).data('color');
                    if (loc.indexOf('color-default') !=-1) {
                        newHref=loc.replace('color-default',clrIndex);
                    }else if (loc.indexOf('color-1') !=-1) {
                        newHref=loc.replace('color-1',clrIndex);
                    }else if (loc.indexOf('color-2') !=-1) {
                        newHref=loc.replace('color-2',clrIndex);
                    }else if (loc.indexOf('color-3') !=-1) {
                        newHref=loc.replace('color-3',clrIndex);
                    }else if (loc.indexOf('color-4') !=-1) {
                        newHref=loc.replace('color-4',clrIndex);
                    }
                    $(this).attr('href', newHref);
                    console.log(newHref);
                    console.log(clrIndex);
                });