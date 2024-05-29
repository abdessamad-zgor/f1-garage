<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Fuel Type</th>
        <th>Registration Number</th>
        <th>Actions</th>
    </tr>
    @foreach ($vehicules as $vehicule)
    <tr id="row{{ $vehicule->id }}">
        <td>{{ $vehicule->id }}</td>
        <td>{{ $vehicule->brand }}</td>
        <td>{{ $vehicule->model }}</td>
        <td>{{ $vehicule->fuel_type }}</td>
        <td>{{ $vehicule->registration_number }}</td>
        <td>

            <a class="btnShow btn bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded" v="{{ $vehicule->id }}"> {{__('Show')}}</a>

            <a class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" href="{{ route('vehicules.edit',$vehicule->id) }}"> {{__('Edit')}}</a>


            <button onclick="confirmDelete({{ $vehicule->id }})" class="btn bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded"> {{__('Delete')}}</button>

        </td>
    </tr>
    @endforeach
</table>
<script>
    function confirmDelete(id) {

        $("#deleteId").val(id);
        $("#myModal").show();
    }

    $(".btnShow").on("click", function() {
        var myId = $(this).attr("v");
        var data = {
            'id': myId
        }

        axios.post('/vehicules/showModal', data)
            .then(response => {

                $("#showdiv").html(response.data);
                $("#myModalShowVehicule").show();

            })
            .catch(error => {
                console.log(error);
            });


    })

    $(window).on("click", function(event) {
        if (event.target.id === "myModal") {
            $("#myModal").hide();
        }
    })
</script>