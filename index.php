<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Python Code Formatter is an Online tool for beautifying your python code with one click." />
  <title>Python Code Formatter Online</title>



  <!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@400;700&amp;display=swap" rel="stylesheet" />


  <style>





    /* Reset */
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center, dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
    }
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    body {
      line-height: 1;
      font-family: Arial, sans-serif;
      background-color: #dae1f1;
      color: #333;
    }
    ol, ul { list-style: none; }

    /* Layout */
    #head { width:100%; height:55px; background-color: #5b7ab1; position: relative; }
    #header { width:900px; height:55px; margin:0 auto; display:flex; align-items:center; }
    #header a{line-height:100%;}
    #header img{width:203px}
    #main { width:900px; margin:20px auto; display:table }
    #leftbar { width:650px; background:white; float:left; height:auto; border:1px solid #ccc; }
    #rightbar { width:240px; float:right; height:auto; border:0px solid #ccc; padding-bottom:10px;}
    h1 { font-size:24px; margin:20px; font-family: 'Encode Sans Condensed', sans-serif; font-weight:900; color:#4d4d4d }
    #leftbar h2 { font-size:22px; margin:20px; font-family: 'Encode Sans Condensed', sans-serif; font-weight:900; color:#4d4d4d }
    #leftbar h3 { font-size:19px; margin:20px; font-weight:bold; }
    #leftbar li { font-size:18px; line-height: 27px; margin:10px 20px; font-family:Georgia; }
    #leftbar p { font-size:18px; line-height: 27px; margin:10px 20px; font-family:Georgia; }
    #leftbar p a { text-decoration: none;color:#404040}
    #leftbar img { width:100%; margin:10px 0; }
    #leftbar strong{font-size:18px; line-height: 27px; margin:10px 20px; font-family:Georgia; font-weight: bolder;}

    #rightbar strong { color:#5b7ab1; font-size:16px; font-style:italic; margin:15px; }
    #rightbar p { margin:15px; font-family:Roboto, sans-serif; }
    #rightbar a { font-size:16px; color:#404040; text-decoration:none; font-family:Georgia; }
    #rightbar a:hover { color:#5b7ab1; }

    table { border-collapse: collapse; width: 100%; border-radius: 10px; overflow: hidden; }
    thead { background-color: #2c3e50; color: white; }
    th, td { padding: 14px 20px; text-align: left; border-bottom: 1px solid #ddd; }
    tbody tr:nth-child(even) { background-color: #f2f2f2; }
    tbody tr:hover { background-color: #e6f7ff; }

    textarea {
      min-width:calc(100% - 23px); max-width:calc(100% - 23px);
      min-height:80px; max-height:100px;
      padding:10px; margin:15px auto;
      outline:1px solid rgb(103, 221, 118);
      font-family:tahoma;
      background-color: #f2f2f2;
      color: #333;
      font-size:18px;
    }

    #foot { width:100%; display:table; margin-top:20px; padding:30px 0; background-color:#5b7ab1; }
    #footer { width:900px; margin:auto; height:auto; padding-bottom:30px}
    #footer-left, #footer-mid, #footer-right { float:left; height:auto; }
    #footer-left { width:160px; }
    #footer-mid { width:300px; }
    #footer-right { width:400px; float:right; }

    .menu-container { }
    .menu > li { position: relative; }
    .menu > li > a {
      display: block; padding: 10px 15px;
      text-decoration: none; color: white;
      font-size: 15px;
    }
    .menu > li > a:hover { text-decoration: underline; }

    .copyright {
      width:100%; height:25px; background-color:#e6e6e6;
      color:#434343; font-size:14px; text-align:center; line-height:25px;
    }

    #toggle-theme {
      position: absolute; right: 10px; top: 10px;
      border: none;
      font-size: 14px;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease, color 0.3s ease;
      background-color: #fff;
      color: #333;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    }

    /* Night Mode */
    body.night-mode ,{
      background-color: #121212;
      color: #e0e0e0;
    }
    body.night-mode #head,
    body.night-mode #foot, {
      background-color: #1f2b45;
    }
    body.night-mode #leftbar,
    body.night-mode #rightbar, 
    {
      background-color: #1c1c1c;
      border-color: #333;
    }
    body.night-mode #leftbar h2,
    body.night-mode #leftbar h3,
    body.night-mode #leftbar p,
    body.night-mode #rightbar p,
    body.night-mode #rightbar a,
    body.night-mode .menu > li > a {
      color: #e0e0e0 !important;
    }
    body.night-mode #rightbar a:hover,
    body.night-mode .menu > li > a:hover {
      color: #9ec3ff !important;
    }
    body.night-mode table thead {
      background-color: #394867;
    }
    body.night-mode tbody tr:nth-child(even) {
      background-color: #2b2b2b;
    }
    body.night-mode tbody tr:hover {
      background-color: #3a3a3a;
    }
    body.night-mode textarea {
      background-color: #1e1e1e;
      color: #e0e0e0;
      outline: 1px solid #66bb6a;
    }
    body.night-mode .copyright {
      background-color: #1a1a1a;
      color: #bbbbbb;
    }
    body.night-mode #toggle-theme {
      background-color: #333;
      color: #fff;
    }
  
.btn {
  display: inline-block;
  padding: 8px 14px;
  background-color: #5b7ab1;
  color: white;
  border-radius: 5px;
  text-decoration: none;
  margin-top: 10px;
  font-size: 15px;
}
.btn:hover {
  background-color: #425f94;
}  

      @keyframes fadeInOut {
      0% { opacity: 0; transform: translateY(-5px); }
      20% { opacity: 1; transform: translateY(0); }
      80% { opacity: 1; transform: translateY(0); }
      100% { opacity: 0; transform: translateY(-5px); }
    }

    #headinfo{background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%); border-radius: 8px; padding: 20px; margin-bottom: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);}
    #headinfo p{font-size: 16px; color: #4a5568; line-height: 1.6; margin-bottom: 15px;}


    #format-btn:hover {
      background: linear-gradient(to right, #4a6aa5, #5b7ab1);
      box-shadow: 0 4px 8px rgba(91, 122, 177, 0.3);
      transform: translateY(-1px);
    }
    
    #clear-btn:hover, #copy-btn:hover {
      background: #f7fafc;
      border-color: #cbd5e0;
      transform: translateY(-1px);
    }
    
    textarea:focus {
      outline: none;
      border-color: #5b7ab1;
      box-shadow: 0 0 0 2px rgba(91, 122, 177, 0.2);
    }
    
    .night-mode #leftbar h2,
    .night-mode #leftbar h3 {
      color: #e2e8f0 !important;
    }
    
    .night-mode #python-code,
    .night-mode #formatted-code {
      background-color: #1a202c !important;
      color: #e2e8f0 !important;
      border-color: #2d3748 !important;
    }
    
    .night-mode textarea:focus {
      border-color: #5b7ab1 !important;
      box-shadow: 0 0 0 2px rgba(91, 122, 177, 0.3) !important;
    }

 .night-mode #headinfo {
    background-color: #1f2b45 !important;
    color: #e0e0e0 !important;
  }
  .night-mode #headinfo p {
    color: #e0e0e0 !important;
  }
    
    .night-mode .btn {
      background-color: #2d3748 !important;
      border-color: #4a5568 !important;
      color: #e2e8f0 !important;
    }
    
    .night-mode #pro-tips {
      background-color: #2d3748 !important;
      border-color: #4a5568 !important;
    }
    /* Responsive */
@media (max-width: 600px) and (min-width: 200px){

#head{width:100%;height:55px;}
#header{width:98%;height:55px;margin:0 auto;display:flex;align-items:center;}
#header img{height:90%}
#main{width:97%;margin:0px auto;display:table;margin-top:20px;display:table}
#leftbar{width:100%;float:none;padding-top:10px;height:auto;padding-bottom:20px;}
#rightbar{width:97%;float:none;height:auto;padding-bottom:20px;margin:20px auto}
h1 { font-size:22px; margin:20px; font-family: 'Encode Sans Condensed', sans-serif; font-weight:900; color:#4d4d4d }
#leftbar h2{font-size:20px;margin:20px 10px;}
#leftbar h3{font-size:18px;margin:20px 10px;}
#leftbar p{font-size:15px;line-height: 22px;margin:10px 10px}
#leftbar img{width:100%;margin:10px 0;} 

#head img{margin-left:15px}
#head button{right:7px;top:14px}

    table {border-collapse: collapse; width: 100%; border-radius: 10px; overflow:scroll; }
    thead { background-color: #2c3e50; color: white; }
    th, td { padding: 14px 20px; text-align: left; border-bottom: 1px solid #ddd; }
    tbody tr:nth-child(even) { background-color: #f2f2f2; }
    tbody tr:hover { background-color: #e6f7ff; }

    textarea {
        
      min-width:calc(100% - 22px); max-width:calc(100% - 22px);
      min-height:100px; max-height:100px;
      padding:10px; margin:15px auto;
      outline:1px solid rgb(103, 221, 118);
      font-family:tahoma;
      background-color: #f2f2f2;
      color: #333;
    }


      #foot{width:100%;display:table;background-color: #5b7ab1;margin-top:20px;padding:20px 0;background-color: #748fbe;background-color:#5b7ab1;}
      #footer{width:100%;margin: auto;display:table;}
      #footer-left, #footer-mid, #footer-right { float:left; height:auto; }
      #footer-left { width:100%; float:none;margin-top:20px;}
      #footer-mid { width:100%;float:none;margin-top:20px;}
      #footer-right { width:100%;float:none;margin-top:20px;}

}
  </style>
</head>

<body>
  <div id="head">
    <div id="header">
       <a href="/">
      <img src="pythonware.png"/>
      </a>
    </div>
    <button style="position:fixed" id="toggle-theme">🌙 Dark</button>
  </div>  

<!--main starts-->


<div id="main">


<div id="leftbar">
  <h2 style="font-size: 28px; color: #2c3e50; border-bottom: 2px solid #5b7ab1; padding-bottom: 10px; margin-bottom: 20px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="#5b7ab1" style="vertical-align: middle; margin-right: 10px;">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
    </svg>
    Python Code Formatter
  </h2>
  
  <div id="headinfo">
    <p>
      Format your Python code instantly with our advanced tool. Get perfectly indented, PEP 8 compliant code with just one click.
    </p>
    
    <div style="position: relative; margin-bottom: 15px;">
      <textarea id="python-code" placeholder="Paste your Python code here..." style="
        width: 100%;
        min-height: 150px;
        padding: 15px;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        font-family: 'Consolas', 'Monaco', monospace;
        font-size: 14px;
        line-height: 1.5;
        background-color: #fff;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        transition: border-color 0.2s, box-shadow 0.2s;
        resize: vertical;
      ">a = 33
b = 200
if b > a:
  print("b is greater than a")</textarea>
      <div style="position: absolute; top: 10px; right: 10px; font-size: 12px; color: #a0aec0; background: rgba(255,255,255,0.8); padding: 2px 6px; border-radius: 4px;">
        <span id="line-count">4</span> lines
      </div>
    </div>
    
    <div style="display: flex; gap: 10px; margin-bottom: 15px;">
      <button id="format-btn" class="btn" style="
        background: linear-gradient(to right, #5b7ab1, #6b8cce);
        border: none;
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 600;
        border-radius: 6px;
        color: white;
        cursor: pointer;
        transition: all 0.2s;
        box-shadow: 0 2px 5px rgba(91, 122, 177, 0.3);
        display: flex;
        align-items: center;
        gap: 8px;
      ">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
        </svg>
        Format Code
      </button>
      
      <button id="clear-btn" class="btn" style="
        background: #fff;
        border: 1px solid #e2e8f0;
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 600;
        border-radius: 6px;
        color: #4a5568;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        gap: 8px;
      ">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#4a5568">
          <path d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14zM6 7v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zm8 7v-2h-4v2h4z"/>
        </svg>
        Clear
      </button>
      
      <button id="copy-btn" class="btn" style="
        background: #fff;
        border: 1px solid #e2e8f0;
        padding: 10px 20px;
        font-size: 15px;
        font-weight: 600;
        border-radius: 6px;
        color: #4a5568;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        gap: 8px;
      ">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#4a5568">
          <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/>
        </svg>
        Copy
      </button>
    </div>
    
    <div id="error-message" style="
      color: #e53e3e;
      background-color: #fff5f5;
      padding: 12px;
      border-radius: 6px;
      margin-bottom: 15px;
      display: none;
      font-size: 14px;
      border-left: 4px solid #e53e3e;
    "></div>
  </div>
  
  <h3 style="font-size: 20px; color: #2c3e50; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#5b7ab1">
      <path d="M9 4v3h5v12h3V7h5V4H9zm-6 8h3v7h3v-7h3V9H3v3z"/>
    </svg>
    Formatted Code
  </h3>
  
  <div style="position: relative;">
    <pre id="formatted-code" style="
      background-color: #f8fafc;
      padding: 16px;
      border-radius: 6px;
      border: 1px solid #e2e8f0;
      margin: 0;
      overflow-x: auto;
      font-family: 'Consolas', 'Monaco', monospace;
      white-space: pre;
      font-size: 14px;
      line-height: 1.5;
      min-height: 100px;
      box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);
    ">a = 33
b = 200
if b > a:
    print("b is greater than a")</pre>
    <div id="copy-success" style="
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(46, 204, 113, 0.9);
      color: white;
      padding: 5px 10px;
      border-radius: 4px;
      font-size: 12px;
      font-weight: 600;
      display: none;
      animation: fadeInOut 2s ease-in-out;
    ">Copied to clipboard!</div>
  </div>
 
 
<br><br><br> <br><br><br> <br><br><br> <br><br><br>
<h2>What is a Python Code Formatter?</h2> 
<p>Writing clean, readable Python code can be challenging, especially when you're working on complex projects or collaborating with other developers. 
We have crafted this online tool for format your python code with ease.
</p>
<p>
    This free web-based tool automatically organizes and styles your Python code according to standard formatting conventions. Generally people miss identation in python that not just make the code look weird but also gives error in python.
</p>
<p>
    Our Python code formatter saves you time and effort by instantly cleaning up messy or inconsistent code. Instead of manually adjusting indentation, spacing, and line breaks, simply paste your Python code into our tool and get perfectly formatted results in seconds. The formatter follows Python's official style guide (PEP 8), ensuring your code meets industry standards. This is particularly useful when you're preparing code for submission, code reviews, or when you want to make your GitHub projects look more professional.
</p>
<p>
    Using our online Python formatter is completely free and requires no software installation or account registration. The tool works directly in your web browser, making it accessible from any device with an internet connection. 
</p>
  </div>
    


  <!--leftbar ends -->
  <div id="rightbar">
    
  </div>



</div>

<!--main ends-->

  <div id="foot">
    <div id="footer">
      <div id="footer-left">
        <div class="menu-container">
         
        </div>
      </div>

      <div id="footer-mid">
        <div class="menu-container">
          
        </div>
      </div>
      <div id="footer-right">
          <div class="menu-container">
         
        </div>
      </div>


    </div>
  </div>





  <div class="copyright">© 2025 PythonWare. All rights reserved.</div>

  <script>
    const toggleBtn = document.getElementById('toggle-theme');
    toggleBtn.addEventListener('click', function () {
      document.body.classList.toggle('night-mode');
      toggleBtn.textContent = document.body.classList.contains('night-mode') ? '☀️ Light' : '🌙 Dark';
    });
  

   
    // Initialize line counter
    document.getElementById('python-code').addEventListener('input', function() {
      const lineCount = this.value.split('\n').length;
      document.getElementById('line-count').textContent = lineCount;
    });

    // Format button handler
    document.getElementById('format-btn').addEventListener('click', function() {
      const codeInput = document.getElementById('python-code').value;
      const formattedOutput = document.getElementById('formatted-code');
      const errorMessage = document.getElementById('error-message');
      
      if (!codeInput.trim()) {
        errorMessage.textContent = "Please enter some Python code to format.";
        errorMessage.style.display = "block";
        formattedOutput.textContent = "";
        return;
      }
      
      try {
        const formattedCode = formatPythonCode(codeInput);
        formattedOutput.textContent = formattedCode;
        errorMessage.style.display = "none";
      } catch (error) {
        errorMessage.textContent = "Error formatting code: " + error.message;
        errorMessage.style.display = "block";
        formattedOutput.textContent = "";
      }
    });
    
    // Clear button handler
    document.getElementById('clear-btn').addEventListener('click', function() {
      document.getElementById('python-code').value = "";
      document.getElementById('formatted-code').textContent = "";
      document.getElementById('error-message').style.display = "none";
      document.getElementById('line-count').textContent = "0";
    });
    
    // Copy button handler
    document.getElementById('copy-btn').addEventListener('click', function() {
      const formattedCode = document.getElementById('formatted-code').textContent;
      if (!formattedCode.trim()) {
        document.getElementById('error-message').textContent = "No formatted code to copy.";
        document.getElementById('error-message').style.display = "block";
        return;
      }
      
      navigator.clipboard.writeText(formattedCode).then(function() {
        const copySuccess = document.getElementById('copy-success');
        copySuccess.style.display = "block";
        setTimeout(function() {
          copySuccess.style.display = "none";
        }, 2000);
      });
    });
    
    // Improved Python code formatter
    function formatPythonCode(code) {
      const lines = code.split('\n');
      let formattedLines = [];
      let indentLevel = 0;
      const indentSize = 4;
      let inMultilineString = false;
      
      for (let i = 0; i < lines.length; i++) {
        let line = lines[i];
        let trimmedLine = line.trim();
        
        // Skip empty lines
        if (!trimmedLine && !inMultilineString) {
          formattedLines.push('');
          continue;
        }
        
        // Handle multiline strings
        if (trimmedLine.startsWith('"""') || trimmedLine.startsWith("'''")) {
          inMultilineString = !inMultilineString;
        }
        
        // Don't change indentation inside multiline strings
        if (inMultilineString) {
          formattedLines.push(line);
          continue;
        }
        
        // Decrease indentation for certain keywords
        if (trimmedLine.startsWith('return') || 
            trimmedLine.startsWith('pass') || 
            trimmedLine.startsWith('break') || 
            trimmedLine.startsWith('continue') ||
            trimmedLine.startsWith('raise')) {
          indentLevel = Math.max(0, indentLevel - 1);
        }
        
        // Add current line with proper indentation
        formattedLines.push(' '.repeat(indentLevel * indentSize) + trimmedLine);
        
        // Increase indentation for blocks
        if (trimmedLine.endsWith(':') && 
            !trimmedLine.startsWith('#') && 
            !(trimmedLine.includes('lambda:') || trimmedLine.includes('):'))) {
          indentLevel++;
        }
      }
      
      return formattedLines.join('\n');
    }

  </script>   
</body>
</html>

