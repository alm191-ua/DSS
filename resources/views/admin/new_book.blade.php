
<h1>Hi {{ $user->name }},</h1>

<p>Thank you for adding a new book to our library. We will review it and let you know if it is approved.</p>

<p>Book Title: {{ $book->title }}</p>
<p>Book Author: {{ $book->author }}</p>
<p>Book ISBN: {{ $book->isbn }}</p>

<p>Thanks,<br>
Word Waves :D</p>