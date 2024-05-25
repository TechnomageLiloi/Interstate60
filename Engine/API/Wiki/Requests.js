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
    },

    save: function (keyWiki)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#wiki-edit');
        API.request('Rune.Wiki.Save', {
            key_wiki: keyWiki,
            title: jq_block.find('[name=title]').val(),
            article: jq_block.find('[name=article]').val()
        }, function (data) {
            Rune.Wiki.show();
        }, function () {

        });
    }
}