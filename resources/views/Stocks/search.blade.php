<table id="lstProducts">
    <tr>
        <th class="bg-black text-white font-bold w-8">#</th>
        <th class="bg-black text-white font-bold w-24">@lang('partName')</th>
        <th class="bg-black text-white font-bold w-48">@lang('partReference')</th>
        <th class="bg-black text-white font-bold w-12">@lang('Supplier')</th>
        <th class="bg-black text-white font-bold w-12">@lang('Price')</th>
    </tr>
    @foreach ($stocks as $stock)
        <tr id="row{{$stock->id}}">
            <td>{{ $stock->id}}</td>
            <td>{{ $stock->partName}}</td>
            <td>{!! $stock->partReference !!}</td>
            <td>{{ $stock->supplier}}</td>
            <td>{{ $stock->price}}</td>
            <td>
                <button class="btnShow bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" v="{{$stock->id}}">@lang('Show')</button>
                <button class="btnEdit bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" v="{{$stock->id}}">{{ __('Edit')}}</button>
                <button class="btnDelete bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" v="{{$stock->id}}">{{ trans('Delete')}}</button>
            </td>
        </tr>
    @endforeach
</table>
<script>
    $(document).on('click',".btnShow",function(){
        var stock_id = $(this).attr('v');
        var myData = {'stock_id': product_id};
        var url = '{{ route('stocks.show') }}';

        axios.post(url, myData)
        .then(response => {
                $("#showStock").html(response.data);
                $("#myModalShowStock").show();
        })
        .catch(error => {
            console.log(error);
        });
    })


    $(document).on("click",".btnDelete",function(){
        $("#id").val($(this).attr('v'));
        $("#myModalDeleteStock").show();
    })
</script>