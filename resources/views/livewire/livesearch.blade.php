<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="dropdown">

        <div class="form-inline">

                <input wire:model="search" type="text" class="form-control" placeholder="Type here" aria-label="Recipient's username" aria-describedby="button-addon2" >

            <div>
                <div wire:loading.delay class="spinner-border-sm spinner-border" role="status">
                    <span class="visually-hidden"></span>
                </div>
            </div>

        </div>




        @if($result  && count($result) > 0)
            <ul class="dropdown-menu show" style="margin-top: -15px">
                @foreach($result as $row)
                    <li><a  wire:click="selected({{ $row->id }})" class="dropdown-item" href="#">{{ $row->desc ?? "" }}</a></li>
                @endforeach

            </ul>

        @endif
    </div>
</div>
