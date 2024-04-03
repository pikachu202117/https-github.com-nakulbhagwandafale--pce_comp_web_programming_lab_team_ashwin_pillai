
    function changeTextColor(event) {
      document.execCommand('foreColor', false, event.target.value);
    }

    function changeBackgroundColor(event) {
      document.execCommand('hiliteColor', false, event.target.value);
    }

    function changeFontFamily(fontFamily) {
      document.execCommand('fontName', false, fontFamily);
    }

    function changeFontSize(size) {
      document.execCommand('fontSize', false, size);
    }

    function changeHeading(tag) {
      document.execCommand('formatBlock', false, tag);
    }
 function saveContent() {
      const editableDiv = document.getElementById('myEditableDiv');
      const content = editableDiv.innerHTML;
      localStorage.setItem('savedContent', content);
      sendToServer();
    }

    // Function to send content to the server
    function sendToServer() {
      const editableDiv = document.getElementById('myEditableDiv');
      const content = editableDiv.innerHTML;

      // Using Fetch API to send a POST request to the server
      fetch('./saveContent.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ content }),
      })
      .then(response => response.json())
      .then(data => {
        console.log('Server response:', data);
      })
      .catch(error => {
        console.error('Error:', error);
      });
    }
    function insertImage() {
      const input = document.getElementById('imageInput');
      const file = input.files[0];

    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
      const img = document.createElement('img');
      img.src = e.target.result;
      document.execCommand('insertImage', false, img.outerHTML);
     };
     reader.readAsDataURL(file);
      }
    }

document.getElementById('myEditableDiv').addEventListener('paste', function(event) {
    var items = (event.clipboardData || event.originalEvent.clipboardData).items;
    for (var index in items) {
        var item = items[index];
        if (item.kind === 'file') {
            var blob = item.getAsFile();
            var reader = new FileReader();
            reader.onload = function(event) {
                var img = document.createElement('img');
                img.src = event.target.result;
                document.getElementById('myEditableDiv').appendChild(img);
            };
            reader.readAsDataURL(blob);
        }
    }
});
document.body.addEventListener('keydown', function(event) {
    if (event.altKey && event.key === 'u') {
        document.getElementById('imageForm').querySelector('input[type=file]').click();
    }
});

// Function to handle file input change event
document.getElementById('imageForm').addEventListener('change', function(event) {
    var file = event.target.files[0];
    uploadAndDisplayImage(file);
});

// Function to upload image to server and display in editable div
function uploadAndDisplayImage(file) {
    var formData = new FormData();
    formData.append('image', file);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            var img = document.createElement('img');
            img.src = xhr.responseText; // Assuming server returns the URL of the uploaded image
            img.style.maxWidth = '100%'; // Adjust image width
            document.getElementById('myEditableDiv').appendChild(img);
        } else {
            console.error('Failed to upload image');
        }
    };
    xhr.send(formData);
}

// Function to trigger file input click
document.getElementById('myEditableDiv').addEventListener('keydown', function() {
if (event.altKey && event.key === 'u') {
    document.getElementById('imageForm').querySelector('input[type=file]').click();}
});
