
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              @foreach(array_slice($columns,0,count($columns)-1) as $column)
              <th scope="col">{{str_replace('_',' ',$column)}}</th>
              @endforeach
            </tr>
          </thead>
          <tbody class="table_body">
            @foreach($pageData as $data)
            <tr>
              @foreach($columns as $column)
              <td>{{$data->$column}}</td>
              @endforeach
            </tr>
            @endforeach
          </tbody>
        </table>

        <script>

        function appendData(data){
            $.each(data, function(index,item){
                $('.table_body').append(`
                    
                    <tr>
                        @foreach($columns as $column)
                        <td>${item.{{$column}}}</td>
                        @endforeach
                    </tr>

                `)
            });
        }
        
        // callApi()
            
        </script>