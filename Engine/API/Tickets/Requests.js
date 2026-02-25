Requests.Tickets = {
    schedule: function ()
    {
        API.request('Tickets.Schedule', {
            'debuug': true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key_ticket)
    {
        API.request('Tickets.Show', {
            key_ticket: key_ticket
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Tickets.Create', {
            'debuug': true
        }, function (data) {
            Requests.Tickets.schedule();
        }, function () {

        });
    },

    edit: function (key_ticket)
    {
        API.request('Tickets.Edit', {
            key_ticket: key_ticket
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (key_ticket)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Tickets.Save', {
            key_ticket: key_ticket,
            start: jq_block.find('[name=start]').val(),
            status: jq_block.find('[name=status]').val(),
            title: jq_block.find('[name=title]').val(),
            mark: jq_block.find('[name=mark]').val(),
            data: jq_block.find('[name=data]').val()
        }, function (data) {
            Requests.Tickets.schedule();
        }, function () {

        });
    },

    inHand: function (key_ticket)
    {
        const jq_block = $('#application-diary-edit');
        API.request('Tickets.InHand', {
            key_ticket: key_ticket
        }, function (data) {
            Requests.Tickets.schedule();
        }, function () {

        });
    }
}