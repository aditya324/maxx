<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostics</title>
</head>
<body>
<?php require "./header.php" ?>

<section class="container mx-auto py-10">
    
  <div id="diagnostics-container" class="flex flex-wrap justify-center gap-6"></div>
</section>

<script>
  const diagnosticsData = [
    {
      title: "Bronchoscopy",
      image: "./assets/branchoscopy.webp",
      alt: "Bronchoscopy Diagnostic Procedure",
      link: "./procedures/bronchoscopy.php"
    },
    {
      title: "Cath Lab",
      image: "./assets/cath-lab.webp",
      alt: "Cardiac Catheterization Lab",
      link: "./procedures/cath-lab.php"
    },
    {
      title: "Dialysis",
      image: "./assets/dialysis.webp",
      alt: "Dialysis Treatment Equipment",
      link: "./procedures/dialysis.php"
    },
    {
      title: "Endoscopy",
      image: "./assets/endoscopy.webp",
      alt: "Endoscopy Procedure",
      link: "./procedures/endoscopy.php"
    },
    {
      title: "CT",
      image: "./assets/ct-scan.webp",
      alt: "CT Scan Imaging",
      link: "procedures/ct-scan.php"
    },
    {
      title: "MRI",
      image: "./assets/mri-scan.webp",
      alt: "MRI Scan Imaging",
      link: "procedures/mri-scan.php"
    },
    {
      title: "Pulmonary Function Test",
      image: "./assets/pulmanory-function-test.webp",
      alt: "Pulmonary Function Testing",
      link: "procedures/pulmanory-function-test.php"
    },
    {
      title: "TMT",
      image: "./assets/tmt.webp",
      alt: "Treadmill Test",
      link: "procedures/tmt.php"
    },
    {
      title: "Ultrasound",
      image: "./assets/ultrasound.webp",
      alt: "Ultrasound Imaging",
      link: "procedures/ultrasound.php"
    }
  ];

  const container = document.getElementById("diagnostics-container");

  diagnosticsData.forEach(item => {
    const card = document.createElement("div");
    card.className = "card-hover max-w-xs mx-auto rounded-2xl border border-[#e4d5c6] p-5 shadow-sm bg-white flex flex-col justify-between";

    card.innerHTML = `
      <div>
        <div class="w-full h-40 overflow-hidden rounded-xl mb-4">
          <img src="${item.image}" alt="${item.alt}" class="w-full h-full object-cover" />
        </div>
        <div class="flex justify-center">
          <h3 class="text-center text-lg font-semibold text-[#5c2c20] mb-4">
            ${item.title}
          </h3>
        </div>
      </div>

      <div class="flex justify-center mt-auto">
        <a href="${item.link}" class="border border-orange-500 text-orange-500 px-4 py-1.5 rounded-full text-sm font-medium hover:bg-orange-500 hover:text-white transition">
          Read More
        </a>
      </div>
    `;

    container.appendChild(card);
  });
</script>
    <?php require "./components/footer.php" ?>
</body>
</html>
