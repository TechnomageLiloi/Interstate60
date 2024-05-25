Rune.Wiki = {
    show: function ()
    {
        API.request('Rune.Wiki.Show', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function ()
    {
        API.request('Rune.Wiki.Edit', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}