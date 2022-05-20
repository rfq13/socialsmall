<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <style>
      body {
          font-family: 'Nunito', sans-serif;
      }

      /* make alert class like bootstrap alert */
      .alert {
        position: absolute;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        z-index: 7;
        width: 30%;
        margin-top: 10px;
        /* make on right screen with absolute position */
        left: 50%;
        transform: translateX(-50%);

        

      }

      .alert-success {
          color: #155724;
          background-color: #d4edda;
          border-color: #c3e6cb;
      }

      .alert-danger {
          color: #721c24;
          background-color: #f8d7da;
          border-color: #f5c6cb;
      }

      .alert-warning {
          color: #856404;
          background-color: #fff3cd;
          border-color: #ffeeba;
      }

      .alert-info {
          color: #0c5460;
          background-color: #d1ecf1;
          border-color: #bee5eb;
      }

      .alert-light {
          color: #818182;
          background-color: #fefefe;
          border-color: #fdfdfe;
      }

      .alert-dark {
          color: #1b1e21;
          background-color: #d6d8d9;
          border-color: #c6c8ca;
      }

      .alert-primary {
          color: #004085;
          background-color: #b8daff;
          border-color: #79b8ff;
      }

      .alert-secondary {
          color: #383d41;
          background-color: #e2e3e5;
          border-color: #d6d8db;
      }

      /* make alert-block class like bootstrap alert-block class */
      .alert-block {
          padding-top: .75rem;
          padding-bottom: .75rem;
          margin-bottom: 1rem;
          border-left: .25rem solid transparent;
          border-right: .25rem solid transparent;
          border-radius: .25rem;
      }
  </style>
</head>