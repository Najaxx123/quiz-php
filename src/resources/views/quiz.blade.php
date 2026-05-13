<div>
    @foreach ($quizzes as $quiz)
    <p> {{ $quiz->title }}</p>
    @foreach ($quiz->getUsers as $user)
    <p> {{ $user->name }} </p>
    @endforeach
    @endforeach
</div>
