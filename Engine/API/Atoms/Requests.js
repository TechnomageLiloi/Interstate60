Rune.Atoms = {
    show: function ()
    {
        API.request('Rune.Atoms.Show', {

        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}