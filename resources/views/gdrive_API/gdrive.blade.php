<!DOCTYPE html>
<html>
<head>
  <title>Google Drive API Web App</title>
  <link rel="stylesheet" href="{{ asset('assets/css/gdrive_style.css') }}">
</head>
<body>
  <h1>Google Drive API Web App</h1>

  <!-- Upload -->
  <div class="box">
    <h2>Upload File</h2>
    <input type="file" id="uploadFile">
    <button onclick="uploadFile()">Upload</button>
    <div class="progress-container">
      <div id="progressBar" class="progress-bar"></div>
    </div>
    <p id="uploadResult"></p>
  </div>

  <!-- Delete -->
  <div class="box">
    <h2>Delete File</h2>
    <input type="text" id="deleteId" placeholder="Enter File ID">
    <button onclick="deleteFile()">Delete</button>
    <p id="deleteResult"></p>
  </div>

  <!-- Share -->
  <div class="box">
    <h2>Generate Public URL</h2>
    <input type="text" id="shareId" placeholder="Enter File ID">
    <button onclick="shareFile()">Get Link</button>
    <p id="shareResult"></p>
  </div>

  <!-- Download Link -->
  <div class="box">
    <h2>Generate Downloadable Link</h2>
    <input type="text" id="downloadId" placeholder="Enter File ID">
    <button onclick="generateDownloadLink()">Get Download Link</button>
    <p id="downloadResult"></p>
  </div>

  <!-- Metadata -->
  <div class="box">
    <h2>Metadata File ID:</h2>
    <input type="text" id="metadataId" placeholder="Enter File ID">
    <button onclick="getFileMetadata()">Get Metadata</button>
    <div id="metadataResult"></div>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="overlay">
    <div class="overlay-content" id="overlayMessage"></div>
  </div>

  <script src="{{ asset('assets/js/gdrivescript.js') }}"></script>
</body>
</html>