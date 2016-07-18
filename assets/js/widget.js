var ajaxModalClick;

$(function () {
    ajaxModalOnClick = function (elem, confirmText) {
        if(confirmText) {
            if(!confirm(confirmText)) {
                return false;
            }
        }
        
        var btn = $(elem),
            item = {
                "url": btn.data('action'),
                "type": btn.data('type') ? btn.data('type') : 'get'
            },
            $data = btn.data('data'),
            handler = {
                init: function () {
                    switch (item.type.toUpperCase()) {
                        case 'POST':
                            handler.post();
                            break;
                        case 'GET':
                            handler.get();
                            break;
                    }
                },
                get: function () {
                    $.get(item.url, $data, function (response) {
                        alert(response.message);
                    })
                },
                post: function () {
                    $.post(item.url, $data, function (response) {
                        alert(response.message);
                    })
                }
            };

        handler.init();

        return false;
    };
});
