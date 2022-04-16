<table>
    @foreach($selectkey as $itemData)
    <tr>
        <td>{{$itemData->Name}}</td>
        <td>{{$itemData->Designation}}</td>
        <td>{{$itemData->Salary}}</td>
        <td>{{$itemData->Address}}</td>
    </tr>
    @endforeach
</table>