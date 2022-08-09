<!-- Team Start -->
    <div id="rs-team" class="rs-team style3 pt-120 md-pt-80" style="padding-bottom:100px;">
        <div class="container">
            <div class="row">
                @foreach ($brokers  as $broker)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="team-item">
                            <div class="team-img">
                                <a href="#"><img
                                        src="{{ $broker->image }}" alt="" style="width: 400px; height: 300px; object-fit:cover; border-radius: 15px;"></a>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <div class="name">
                                        <a href="speaker-single.html">{{ $broker->name }}</a>
                                    </div>
                                    <span class="post" style="text-transform: lowercase;">{{ $broker->email }}</span>
                                </div>
                                <ul class="social-icon" style="width: 400px; padding: 0rem; margin-bottom: 0rem;">
                                    @if(!$voter_email_exists)
                                        <button class="btn btn-success mr-3" style="outline: none; border:none; padding: 5px 40px; margin-top: 30px;"
                                        id="vote"  data-type="upvote"  data-broker="{{ $broker->id }}" data-email="{{ Session::get('voter_email') }}"
                                        data-event="{{ Session::get('event_id') }}"
                                        >Vote</button>
                                    @else
                                         <button class="btn btn-success mr-3" style="outline: none; border:none; padding: 5px 40px;"
                                        disabled
                                        > You Voted</button>                                  
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($voter_email_exists)
            <div class="text-center" style="margin: 60px 0;">
                 <form action="{{ route('change', $vote->id) }}" method="post">
                    @csrf @method('delete') <a type="submit"
                        class="btn btn-danger btn-xl changeVote" style="padding: 20px; 50px; "
                        data-id="{{ $vote->id }}">Change My Vote</a> </form>
            </div>
            @else
            @endif
        </div>
    </div>
<!-- Team end -->
 
{{-- style="padding: 10px; 40px; outline: none; border: none; border-radius:10px; color: white;" --}}


@section('scripts')

<script>
    $(document).on('click', '#vote', function() {
        var _broker = $(this).data('broker');
        var _type = $(this).data('type');
        var _email = $(this).data('email');
        var _event = $(this).data('event');
        var vm = $(this);        

            $.ajax({
            url: '{{ route('save.votes') }}',
            type: "post",
            dataType: 'json',
            data: {
                broker: _broker,
                type: _type,
                email: _email,
                event: _event,
                _token: "{{ csrf_token() }}"
            },
            beforeSend: function() {
                vm.addClass('disabled');
            },
            success: function(res) {
                if (res.bool == true) {
                    vm.addClass('disabled');
                    voteBtn = $('[id="vote"]');
                    voteBtn.addClass('disabled');
                    voteBtn.text('You Voted');
                    vm.removeAttr('id');
                    var _prevCount = $("." + _type + "-count").text();
                    _prevCount++;
                    $("." + _type + "-count").text(_prevCount);
                // vm.addClass('disabled');
                swal({
                    title: "Success",
                    text: "You have successfully voted. Thank you!",
                    icon: "success",
                    button: "ok!",
                });
            }
            }
        })
    })
</script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.changeVote').click(function(e) {
            var form = $(this).closest('form');
            var dataId = $(this).data('id');
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "You want to change your vote!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(" You can now vote again!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your vote has not been changed. Thank you!");
                    }
                });
        });
    </script>

@endsection