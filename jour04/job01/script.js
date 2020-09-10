$(document).ready(function() {

$('button').click(function() {
    $.ajax({
        method: 'GET',
        url: 'expression.txt',
       // data: datas,
        success: (data) =>{
        console.log(data);
        $('p').append(data);
        }
        });

    });
})
