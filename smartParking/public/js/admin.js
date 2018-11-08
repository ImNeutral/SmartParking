// $('.parkingLotCreate').append('<tr><td></td><td></td></tr>');

$(document).ready(function(){
    var columns = 2;
    var rows =

    $('#addRow').click(function () {
        var rowAppendContent = "<tr>";
        for(roll = 1; roll <= columns; roll++){
            rowAppendContent += '<td></td>';
        }
        rowAppendContent += "</tr>";

        $('.parkingLotCreate').append(rowAppendContent);
    });

    $('#addColumn').click(function () {
        var columnAppendContent = '<td></td>';
        $('.parkingLotCreate tr').append(columnAppendContent);
        columns++;
    });

    // navigate through every cell in the table
    $('#testButton').click(function () {
        $('.parkingLotCreate tr').each(function () {
            $tr = $(this);
            $tr.children().each(function () {
                $tdChild = $(this).children('div');
                $tdChildID = $tdChild.attr('data-id');
                if($tdChildID != null){
                    console.log($tdChildID);
                }
            });
        });
    });

});