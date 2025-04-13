<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ステップ選択 - 言語学習</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="container my-5">
    <h1 class="text-center mb-4">学習ステップを選択</h1>

    <div class="row" id="steps-container"></div>
  </div>

  <script>
    // JSONデータを読み込む
    fetch('steps.json')
      .then(response => response.json())
      .then(data => {
        const container = document.getElementById('steps-container');
        
        // JSONデータから動的にカードを作成
        data.forEach(step => {
          const card = `
            <div class="col-md-4">
              <div class="card h-100 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">${step.title}</h5>
                  <p class="card-text">${step.description}</p>
                  <a href="${step.link}" class="btn btn-primary">開始する</a>
                </div>
              </div>
            </div>
          `;
          container.innerHTML += card;
        });
      })
      .catch(error => console.error('エラーが発生しました:', error));
  </script>

</body>
</html>
