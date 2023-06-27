<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>QuickDev Tools - HTML/CSS/Bootstrap Tools</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Custom CSS styles go here */
    </style>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">QuickDev Tools - HTML/CSS/Bootstrap Tools</h1>
        <div class="row">
            <!-- Tools will be dynamically generated here -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        // JSON data
        const tools = {
            "tools": [{
                    "name": "Glassmorphism CSS Generator",
                    "description": "Generate CSS for creating glassmorphism UI design",
                    "thumbnail": "https://ui.glass/img/ui-glass-mockup.png",
                    "url": "https://ui.glass/generator/",
                    "category": "Design"
                },
                {
                    "name": "Neumorphism/Soft UI CSS Generator",
                    "description": "Generate CSS for creating neumorphism/soft UI design",
                    "thumbnail": "https://neumorphism.io/static/neumorphism-io-preview.png",
                    "url": "https://neumorphism.io/#e0e0e0",
                    "category": "Design"
                },
                {
                    "name": "SVG Shape Generator",
                    "description": "Generate SVG shapes for web design",
                    "thumbnail": "https://www.softr.io/assets/thumbnails/tools/svg-shape-generator.png",
                    "url": "https://www.softr.io/tools/svg-shape-generator",
                    "category": "Design"
                },
                {
                    "name": "SVG Wave Generator",
                    "description": "Generate SVG waves for web design",
                    "thumbnail": "https://www.softr.io/assets/thumbnails/tools/svg-wave-generator.png",
                    "url": "https://www.softr.io/tools/svg-shape-generator",
                    "category": "Design"
                },
                {
                    "name": "Compress Images",
                    "description": "Compress your images without losing quality",
                    "thumbnail": "https://tinypng.com/images/social/website.jpg",
                    "url": "https://tinypng.com/",
                    "category": "Development"
                }
            ]
        }

        // Generate tools HTML
        const toolsContainer = document.querySelector('.row');
        let toolsHTML = '';
        tools.tools.forEach(tool => {
            toolsHTML += `
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="${tool.thumbnail}" class="card-img-top" alt="${tool.name}">
        <div class="card-body">
          <h5 class="card-title">${tool.name}</h5>
          <p class="card-text">${tool.description}</p>
          <a href="${tool.url}" target="_blank" class="btn btn-primary">Go to Tool</a>
        </div>
      </div>
    </div>
  `;
        });
        toolsContainer.innerHTML = toolsHTML;
    </script>
</body>

</html>