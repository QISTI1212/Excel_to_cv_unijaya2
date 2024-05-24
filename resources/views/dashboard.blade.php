<style>

    /* custom.css */
body {
    background-color: white;
    color: black;
}

.card {
    background-color: white;
    border: 1px solid #ddd; /* Add borders to cards */
}

.table {
    background-color: white;
}

.btn-primary {
    background-color: #fff;
    border-color: #007bff;
    color: #007bff;
}


   .file-upload-form {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
}
.file-upload-label input {
  display: none;
}
.file-upload-label svg {
  height: 50px;
  fill: rgb(82, 82, 82);
  margin-bottom: 20px;
}
.file-upload-label {
  cursor: pointer;
  background-color: #ddd;
  padding: 30px 70px;
  border-radius: 40px;
  border: 2px dashed rgb(82, 82, 82);
  box-shadow: 0px 0px 200px -50px rgba(0, 0, 0, 0.719);
}
.file-upload-design {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
}
.browse-button {
  background-color: rgb(82, 82, 82);
  padding: 5px 15px;
  border-radius: 10px;
  color: white;
  transition: all 0.3s;
}
.browse-button:hover {
  background-color: rgb(14, 14, 14);
}

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Excel To CV") }}<a href="{{ url('/generate-pdf') }}" target="_blank" class="btn btn-primary">Open PDF</a>

                </div>
            </div>
        </div>
    </div>

    <div>
        <center>
{{--
        <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
        @csrf --}}
        <div class="file-upload-form">
            <label for="file" class="file-upload-label">
                <div class="file-upload-design">
                    <svg viewBox="0 0 640 512" height="1em">
                        <path
                            d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                        ></path>
                    </svg>
                    <p>Drag and Drop</p>
                    <p>or</p>
                    <span class="browse-button">Browse file123</span>
                </div>
                <input id="file" name="file" type="file" />
            </label>
        </div>
        <button type="submit">Upload</button>
    {{-- </form> --}}

    <div class="container mt-5">
        <div class="card" sty>
            <div class="card-header">
                File Upload Table
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Upload</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>File 1</td>
                            <td>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>File 2</td>
                            <td>
                                    <button type="submit" class="btn btn-primary">Download</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>




        </center>

</div>
</x-app-layout>
