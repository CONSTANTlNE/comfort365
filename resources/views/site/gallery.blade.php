@extends('site.components.layout')


@section('gallery')

{{--    <div class="rts-bread-crumb-area ptb--65 bg_image bg-breadcrumb">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="con-tent-main">--}}
{{--                        <div class="wrapper">--}}
{{--                            <div class="slug">--}}
{{--                                <a href="#index.html">HOME /</a>--}}
{{--                                <a class="active" href="#index.html">Project</a>--}}
{{--                            </div>--}}
{{--                            <div class="title">--}}
{{--                                <a href="#">Our Project</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    <div class="rts-project-page-project rts-section-gap">
        {{--        add work--}}
        @auth()
            <div class="d-flex justify-content-center mb-5">
                <button onclick="openDialog()" id="newProject" style="max-width: 150px" class="rts-btn btn-primary">
                    ახალი ფოტო
                </button>
                <dialog id="customDialog">
                    <div class="form--area" style="padding: 5px">
                        <form action="{{route('work.store')}}" class=" mt--30" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <label for="category">დასახელება</label>
                            <input name="title" class="mb-5" type="text" placeholder="დასახელება">
                            <label for="category">კატეგორია</label>
                            <select required id="category" name="category" class="mb-5">
                                <option value="">კატეგორიის გარეშე</option>
                                <option value="გაზის შიდა ქსელები">გაზის შიდა ქსელები</option>
                                <option value="სანტექტნიკა">სანტექტნიკა</option>
                                <option value="გათბობა-გაგრილების სისტემები">გათბობა-გაგრილების სისტემები</option>
                                <option value="დაზიანების დადგენა/აღმოფხვრა">დაზიანების დადგენა/აღმოფხვრა</option>
                                <option value="ელექტრო გაყვანილობის მონტაჟი">ელექტრო გაყვანილობის მონტაჟი</option>
                                <option value="სახანძრო უსაფრთხოების სიტემები">სახანძრო უსაფრთხოების სიტემები</option>
                                <option value="სავენტილაციო არხების მოწყობა">სავენტილაციო არხების მოწყობა</option>
                                <option value="შედუღების სამუშაოები">შედუღების სამუშაოები</option>
                                <option value="მიწის სამუშაოები">მიწის სამუშაოები</option>
                            </select>

                            <input required style="all: unset" type="file" name="file[]" placeholder="Select Subject"
                                   multiple accept="image/*">
                            @error('file')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="dialog-footer">
                                <button type="button" class="cancel-btn" onclick="closeDialog()">გაუქმება</button>
                                <button class="confirm-btn">დამატება</button>
                            </div>
                        </form>
                    </div>

                </dialog>
            </div>
        @endauth
        <div class="container">
            <div class="row g-24">
                @foreach($works as $work)
                    <div class="col-lg-4">
                        @auth()
                            <div class="d-flex justify-content-around mb-3">
                                <button class="openEdits" style="all: unset;cursor: pointer ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#131cdb" stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8"/>
                                    </svg>
                                </button>
                                {{--  delete work--}}
                                <form action="{{route('work.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$work->id}}">

                                    <button style="all: unset;cursor: pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                             viewBox="0 0 24 24">
                                            <path fill="#d01610"
                                                  d="M7 21q-.825 0-1.412-.587T5 19V6q-.425 0-.712-.288T4 5t.288-.712T5 4h4q0-.425.288-.712T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5t-.288.713T19 6v13q0 .825-.587 1.413T17 21zm3-4q.425 0 .713-.288T11 16V9q0-.425-.288-.712T10 8t-.712.288T9 9v7q0 .425.288.713T10 17m4 0q.425 0 .713-.288T15 16V9q0-.425-.288-.712T14 8t-.712.288T13 9v7q0 .425.288.713T14 17"/>
                                        </svg>
                                    </button>
                                </form>
                                {{--  edit work dialog--}}
                                <dialog class="editDialogs">
                                    <div class="form--area" style="padding: 5px">
                                        <form action="{{route('work.update')}}" class=" mt--30" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$work->id}}">
                                            <label for="category">დასახელება</label>
                                            <input name="title" class="mb-5" type="text" value="{{$work->title}}">
                                            <label for="category">კატეგორია</label>
                                            <select required id="category" name="category" class="mb-5">
                                                <option @selected($work->category == 'კატეგორიის გარეშე') value="">
                                                    კატეგორიის გარეშე
                                                </option>
                                                <option @selected($work->category == 'გაზის შიდა ქსელები') value="გაზის შიდა ქსელები">
                                                    გაზის შიდა ქსელები
                                                </option>
                                                <option @selected($work->category == 'სანტექტნიკა') value="სანტექტნიკა">
                                                    სანტექტნიკა
                                                </option>
                                                <option @selected($work->category == 'გათბობა-გაგრილების სისტემები') value="გათბობა-გაგრილების სისტემები">
                                                    გათბობა-გაგრილების სისტემები
                                                </option>
                                                <option @selected($work->category == 'დაზიანების დადგენა/აღმოფხვრა') value="დაზიანების დადგენა/აღმოფხვრა">
                                                    დაზიანების დადგენა/აღმოფხვრა
                                                </option>
                                                <option @selected($work->category == 'ელექტრო გაყვანილობის მონტაჟი') value="ელექტრო გაყვანილობის მონტაჟი">
                                                    ელექტრო გაყვანილობის მონტაჟი
                                                </option>
                                                <option @selected($work->category == 'სახანძრო უსაფრთხოების სიტემები') value="სახანძრო უსაფრთხოების სიტემები">
                                                    სახანძრო უსაფრთხოების
                                                    სიტემები
                                                </option>
                                                <option @selected($work->category == 'სავენტილაციო არხების მოწყობა') value="სავენტილაციო არხების მოწყობა">
                                                    სავენტილაციო არხების მოწყობა
                                                </option>
                                                <option @selected($work->category == 'შედუღების სამუშაოები') value="შედუღების სამუშაოები">
                                                    შედუღების სამუშაოები
                                                </option>
                                                <option @selected($work->category == 'მიწის სამუშაოები') value="მიწის სამუშაოები">
                                                    მიწის სამუშაოები
                                                </option>
                                            </select>
                                            <img src="{{$work->media->first()->getUrl()}}" alt="">
                                            <div class="dialog-footer">
                                                <button type="button" class="cancel-btn closeEdits ">გაუქმება
                                                </button>
                                                <button class="confirm-btn">რედაქტირება</button>
                                            </div>
                                        </form>
                                    </div>

                                </dialog>
                            </div>
                        @endauth
                        <div class="project-one-wrapper">
                            {{--                            <div class="shape"><img src="frontendAssets/images/project/shape/01.png" alt="shape"></div>--}}
                            <a href="{{$work->media->first()->getUrl()}}" class="thumbnail glightbox">
                                <img src="{{$work->media->first()->getUrl()}}" alt="project">
                            </a>
                            <div class="content">
                                <h5 style="color: white" class="pre">{{$work->category}}</h5>
                                {{--                                <a href="project-details.html" class="">--}}
                                {{--                                    <h5 class="title">Official Cleaning Service</h5>--}}
                                {{--                                </a>--}}
                                {{--                                <img src="frontendAssets/images/project/shape/02.png" alt="shape">--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function openDialog() {
            document.getElementById("customDialog").showModal();
        }

        function closeDialog() {
            document.getElementById("customDialog").close();
        }


        const openedits = document.querySelectorAll('.openEdits');
        const editDialogs = document.querySelectorAll('.editDialogs');
        const closedits = document.querySelectorAll('.closeEdits');

        openedits.forEach((btn, index) => {

            btn.addEventListener('click', (e) => {
                editDialogs[index].showModal()
            });
        })
        closedits.forEach((btn, index) => {
            btn.addEventListener('click', (e) => {
                editDialogs[index].close()
            });
        })


    </script>

    <script src="frontendAssets/js/glightbox.js"></script>

    <script>
        var lightboxDescription = GLightbox({
            selector: '.glightbox'
        });
    </script>
@endsection