// Check if browser supports speech recognition
if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
    // Create a new instance of SpeechRecognition
    var recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();

    // Set properties for recognition
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    // Event listener for when speech recognition returns a result
    recognition.onresult = function(event) {
        var command = event.results[0][0].transcript;
        console.log('Command:', command);

        // Perform actions based on the recognized command
        // For example, you can check for specific keywords and perform corresponding actions
        if (command.includes('add expense')) {
            // Call a function to add a new expense
            addExpense();
        } else if (command.includes('show expenses')) {
            // Call a function to show expenses
            showExpenses();
        } else {
            // Handle unrecognized commands
            console.log('Unrecognized command.');
        }
    };

    // Start speech recognition when user clicks a button or speaks a trigger word
    function startRecognition() {
        recognition.start();
        console.log('Listening...');
    }
} else {
    console.error('Speech recognition not supported.');
}

// Function to add a new expense (replace with your own implementation)
function addExpense() {
    console.log('Function to add expense called.');
    // Add your code to handle adding a new expense here
}

// Function to show expenses (replace with your own implementation)
function showExpenses() {
    console.log('Function to show expenses called.');
    // Add your code to handle showing expenses here
}
