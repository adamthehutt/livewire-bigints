<div>
    <style>
        input[type=number] {
            border: 1px solid black
        }
    </style>


    <h1>Fun With Big Integers</h1>

    <div>
        Integer: <input type="number" wire:model="bigIntegerProp">

    </div>

    <div style="margin-top: 1rem">
        Model Property:
        <input type="number" wire:model="modelProp.big_integer">
    </div>

    <div style="margin-top: 1rem">
        Model properties nested in a collection won't even display correctly initially because they will already have been rounded by Javascript:
            <ul>
                @foreach ($collectionProp as $key => $model)
                    <li>{{$key}}: <input type="number" wire:model="collectionProp.{{$key}}.big_integer"> should be {{ $collectionProp[$key]->big_integer }}</li>
                @endforeach
            </ul>
    </div>
</div>
