<x-layout>
    <h1>Servers</h1>
    @forelse ($servers as $server)
        <a href="{{ route('project.environments', [$server->uuid]) }}">{{ data_get($server, 'name') }}</a>
    @empty
        <p>No projects found.</p>
    @endforelse
    <h1>Projects</h1>
    @forelse ($projects as $project)
        <a href="{{ route('project.environments', [$project->uuid]) }}">{{ data_get($project, 'name') }}</a>
    @empty
        <p>No projects found.</p>
    @endforelse
</x-layout>