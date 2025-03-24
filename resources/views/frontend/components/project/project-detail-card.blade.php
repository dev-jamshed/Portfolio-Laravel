<div class="signle-side-bar project-details-area tmponhover">
    <div class="header">
        <h3 class="title">Project Details</h3>
    </div>
    <div class="body">
        <div class="project-details-info">Name: <span>{{$project->name}}</span></div>
        <div class="project-details-info">Author: <span>{{$project->author}}</span></div>
        <div class="project-details-info">Date: <span>{{ \Carbon\Carbon::parse($project->date)->format('F j, Y') }}</span></div>
        <div class="project-details-info">Tags: 
            <span>
            @foreach($project->tags as $tag)
                {{$tag}} 
            @endforeach
            </span>
        </div>
    </div>
</div>