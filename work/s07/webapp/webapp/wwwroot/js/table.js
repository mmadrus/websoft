


function getAccount (account) {
    
    console.log(account);
    $.ajax({
        cache: false,
        url: 'api/accounts/' + account + '',
        type: 'GET',
        success: function (result) {
            
            if (result.number === account) {

                var table = document.getElementById('table');
                var tablecontent = '';
                table.innerHTML = tablecontent;
                tablecontent += ("<tr>");

                tablecontent += ('<th style="width: 25%"> Owner </th>');
                tablecontent += ('<th style="width: 25%"> Number </th>');
                tablecontent += ('<th style="width: 25%"> Label </th>');
                tablecontent += ('<th style="width: 25%"> Balance </th>');

                tablecontent += ("</tr>");

                tablecontent += ("<tr>");

                tablecontent += ('<td style="width: 25%">' + result.owner + '</td>');
                tablecontent += ('<td style="width: 25%">' + result.number + '</td>');
                tablecontent += ('<td style="width: 25%">' + result.label + '</td>');
                tablecontent += ('<td style="width: 25%">' + result.balance + '</td>');

                tablecontent += ("</tr>");

                table.innerHTML += tablecontent;
            }
            
            
        },
        error: function (result) {
            alert('Failed to reach server!');
        }
    });
}

function createTable (tableData) {

    var keys = [];
    var list = document.getElementById('account-list');
    var listContent = '';

    for (var i = 0; i < tableData.length; i++) {

        for (key in tableData[i]) {

            console.log(i);
            if (key === "number") {
                let path = 'api/controller/' + tableData[i][key];
                let number = tableData[i][key];
                console.log(number);
                var text = tableData[i][key];
                var link = "<button class='button' onclick='getAccount(" + number + ")' " +
                    "style='background: transparent; border-radius: 15px; border: 1px solid black; line-height: 20px; '> " + text + "</button>";
                listContent += ('<li style="position: relative; margin-bottom: 50%">' + link + '</li>');

                
                
            }
        }
        
    }
    
    list.innerHTML = listContent;
    
}