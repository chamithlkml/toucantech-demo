<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Toucantech Demo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/members/create">Add New Member</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">View Members</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    <div class="container">
      <div v-if="$page.props.flash.message" class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
        {{ $page.props.flash.message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    <slot>Default</slot>
</template>

<script setup>

</script>