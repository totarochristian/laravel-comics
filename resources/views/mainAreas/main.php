<main class="w-100 h-100 bg-custom-black text-white d-flex justify-content-center align-items-center overflow-hidden">
    <ComicsComponent v-if="menuElements[1].isActive"/>
    <EmptyTitleComponent v-else />
</main>
