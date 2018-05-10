@extends('layouts.app_create')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div id="canvas-container"></div>
        </div>
        <div class="col-md-4">
            <form id="form1">
                <div hidden>
                    <input type="file" id="imgInp" name="img" hidden/>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <button class="btn btn-primary form-control" type="button" onclick="uploadImage()">
                            Upload Gambar
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary form-control" type="button" onclick="uploadImage()">
                            Piilih Desain
                        </button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <br>
                        <label for="text-form">Tambah Text</label>
                        <input id="text-form" type="text" value="" class="form-control"/>
                        <br>
                        <label for="color">Warna Text</label>
                        <select class="form-control" id="color">
                            <option value="black">Hitam</option>
                            <option value="red">Merah</option>
                            <option value="blue">Biru</option>
                            <option value="green">Hijau</option>
                            <option value="yellow">Kuning</option>
                            <option value="white">Putih</option>
                        </select>
                        <br>
                        <label for="style">Jenis Text</label>
                        <select class="form-control" id="style">
                            <option value="Book Antiqua">Book Antiqua</option>
                            <option value="Arial">Arial</option>
                            <option value="Droid Sans">Droid Sans</option>
                            <option value="Gloria Hallelujah">Gloria Hallelujah</option>
                            <option value="yellow">Kuning</option>
                            <option value="white">Putih</option>
                        </select>
                        <button class="btn btn-primary form-control" type="button" onclick="addText()">
                            Buat Text
                        </button>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <button type="button" class="form-control btn btn-info">Tambah Ke Keranjang</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="form-control btn btn-success">Lihat Harga</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('js')
    <script>
        var width = document.getElementById('canvas-container').offsetWidth;
        var height = window.innerHeight;

        var stage = new Konva.Stage({
            container: 'canvas-container',
            width: width,
            height: 600
        });

        function loadImages(sources, callback) {
            var images = {};
            var loadedImages = 0;
            var numImages = 0;
            for (var src in sources) {
                numImages++;
            }
            for (var src in sources) {
                images[src] = new Image();
                images[src].onload = function () {
                    if (++loadedImages >= numImages) {
                        callback(images);
                    }
                };
                images[src].src = sources[src];
            }
        }

        var layer = new Konva.Layer();
        stage.add(layer);

        var imageObj = new Image();

        var tshirt = new Konva.Image({
            x: 50,
            y: 20,
            image: imageObj,
            width: 600,
            height: 600
        });

        // add the shape to the layer
        layer.add(tshirt);

        imageObj.src = '{{ asset('Product/T-Shirt/Male/blue.png') }}';

        function addImage($src) {
            var des = new Image();

            des.src = $src;
            var designs = new Konva.Image({
                x: 400,
                y: 50,
                image: des,
                width: 100,
                height: 100,
                draggable: true
            });

            layer.add(designs);

            layer.draw();
        }

        function addText() {
            var x = document.getElementById('text-form').value;

            var e = document.getElementById("color");
            var color = e.options[e.selectedIndex].value;

            var m = document.getElementById("style");
            var style = m.options[m.selectedIndex].value;

            var text = new Konva.Text({
                x: stage.getWidth() / 2,
                y: 15,
                text: x,
                fontSize: 30,
                fontFamily: style,
                fill: color,
                draggable: true
            });
            layer.add(text);

            layer.draw();
        }

        layer.draw();

        stage.on('click', function (e) {
            // if click on empty area - remove all transformers
            if (e.target === stage) {
                stage.find('Transformer').destroy();
                layer.draw();
                return;
            }
            // do nothing if clicked NOT on our rectangles
            // if (!e.target.hasName('rect')) {
            //     return;
            // }
            // remove old transformers
            // TODO: we can skip it if current rect is already selected
            stage.find('Transformer').destroy();

            // create new transformer
            var tr = new Konva.Transformer();
            layer.add(tr);
            tr.attachTo(e.target);
            layer.draw();
        })


        // loadImages(sources, buildStage);
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // $('#blah').attr('src', e.target.result);
                    addImage(e.target.result);
                    layer.draw();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });

        function uploadImage() {
            var x = document.getElementById('imgInp');
            x.click();
        }
    </script>
@endpush
