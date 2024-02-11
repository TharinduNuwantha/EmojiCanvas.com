const mysql = require('mysql');
const fs = require('fs');

// Create a connection to the database
const connection = mysql.createConnection({
  host: 'localhost', // Your MySQL server host
  user: 'root', // Your MySQL username
  password: '', // Your MySQL password
  database: 'imojidatabse' // Your MySQL database name
});

// Connect to the database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to database: ' + err.stack);
    return;
  }
  console.log('Connected to database as id ' + connection.threadId);

  // Example query
  const sqlQuery = 'SELECT * FROM emojidb WHERE category = "Smileys & Emotion"';

  // Execute the query
  connection.query(sqlQuery, (error, results, fields) => {
    if (error) {
      console.error('Error executing query: ' + error.stack);
      return;
    }
    // Iterate through the results and process them
    results.forEach((row) => {
      console.log(row.emoji);

      // Convert emoji to Buffer
      const buffer = "🙂";

      // Specify the file path
      const filePath = 'example.txt';

      // Append to the file
      fs.appendFile(filePath, buffer, (err) => {
        if (err) {
          console.error('An error occurred while appending to the file:', err);
        } else {
          console.log('Data has been appended to the file successfully!');
        }
      });
    });
    // titleGenarater(row);

    // After processing all rows, close the connection
    connection.end((err) => {
      if (err) {
        console.error('Error closing connection: ' + err.stack);
        return;
      }
      console.log('Connection closed.');
    });
  });
});

// Function to process each row
function titleGenarater(row) {
  var MetaTitle = row.description + ' emoji ' + row.emoji + ' copy and paste ';

  //creating title start---
  const category = row.category;
  const TitleSqlQuery = 'SELECT * FROM emojidb WHERE description LIKE "%'+category+'%" OR keywords LIKE "%'+category+'%" OR category LIKE "%'+category+'%" LIMIT 5';
  connection.query(TitleSqlQuery, (error, titleResults, fields) => {
    if (error) {
      console.error('Error executing title query: ' + error.stack);
      return;
    }
    // Iterate through the titleResults to build the MetaTitle
    titleResults.forEach((titleRow) => {
      MetaTitle += titleRow.emoji + ' ';
    });
    
    // Here, the MetaTitle is complete with the additional emoji data
    console.log('Meta Title:==> ' + MetaTitle);

 

// Data to be appended to the file
const data = MetaTitle+'\n';

// Specify the file path
const filePath = 'example.txt';

// Append to the file
fs.appendFile(filePath, data, { encoding: 'utf-8' }, (err) => {
  if (err) {
    console.error('An error occurred while appending to the file:', err);
  } else {
    console.log('Data has been appended to the file successfully!');
  }
});

  });
  //creating title End---
}
