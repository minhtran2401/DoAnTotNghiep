jQuery(document).ready(function($) {
    var engine1 = new Bloodhound({
        remote: {
            url: './name?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    var engine2 = new Bloodhound({
        remote: {
            url: './price?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, [
        {
            source: engine1.ttAdapter(),
            name: 'name_sp',
            display: function(data) {
                return data.name;
            },
            templates: {
                empty: [
                    '<div class="header-title">Tên</div><div class="search-results-dropdown"><div class="list-group-item">Không có sản phẩm liên quan.</div></div>'
                ],
                header: [
                    '<div class="header-title">Tên</div><div class="search-results-dropdown"></div>'
                ],
                suggestion: function (data) {
                    return '<a href="./'+data.slug_sp+'.html" class="list-group-item">' + data.name_sp + '</a>';
                }
            }
        }, 
        {
            source: engine2.ttAdapter(),
            price: 'price_sp',
            display: function(data) {
                return data.price;
            },
            templates: {
                empty: [
                    '<div class="header-title">Giá</div><div class="search-results-dropdown"><div class="list-group-item">Không có sản phẩm liên quan.</div></div>'
                ],
                header: [
                    '<div class="header-title">Giá</div><div class="search-results-dropdown"></div>'
                ],
                suggestion: function (data) {
                    return '<a href="./'+data.slug_sp+'.html" class="list-group-item">' + data.name_sp + ' - ' + data.price_sp + '.vnđ</a>';
                }
            }
        }
    ]);
});
