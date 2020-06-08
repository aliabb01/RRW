

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
    </head>
    <body>
        <div class="section-header">
            <h2>Billing History</h2>
        </div>

       
            <table class="table table-bordered table-striped table-hover">
                @foreach ($orders as $invoice)
                    <tr>
                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                        <td>{{ $invoice->total() }}</td>
                        <td class="col-xs-2 ">
                          
                        </td>
                    </tr>
                @endforeach 
            </table>
      
    </body>
</html>


