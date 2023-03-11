<h3 class="fw-bold">Start a Vue Project</h3>
<x-code id="get_started" title="Get started create a project SPA with Vue.js">
    <x-slot name="subtitle">
        <p>For Vue.js 3 it has built on Vite instead of webpack for module bundler.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm init vue@latest</b>
        </code>
    </x-slot>
</x-code>

<x-code id="router" title="Vue Router">
    <x-slot name="subtitle">
        <p>If you forgot add vue router when you create with code as we mention above then you can install separately.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm i vue-router</b>
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">Include your index.js on router folder to main.js and use it into an instance of vue object.</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <var>import</var> <em>{ </em><u>createApp</u> <em>}</em> <var>from</var> <s>"vue"</s><b>;</b>
            <var>import</var> <u>App</u> <var>from</var> <s>"./App.vue"</s><b>;</b>
            <var>import</var> <u>router</u> <var>from</var> <s>"./router"</s><b>;</b>

            <bdi>const</bdi> <q>app</q> = <em>createApp(<u>App</u>)</em><b>;</b>
            <q>app</q>.<em>use(<u>router</u>)</em><b>;</b>
        </code>
    </x-slot>
</x-code>

<x-code id="tailwindcss" title="Tailwindcss in your project">
    <x-slot name="subtitle">
        <p>If you want to add css framework such as tailwindcss that makes you easier for styling then you have do something command as we mention in below.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm install -D tailwindcss postcss autoprefixer</b>
            <em>$</em>&nbsp;<b>npx tailwindcss init -p</b>
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">After you execute npx command then you will have a file named tailwind.config.js that contain config of your base tailwindcss. Firstime when you initializing tailwindcss you have put your path that will going to use class from tailwind in the tailwind.config.js.</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <u>content</u>: <var>[</var><s>"./index.html"</s>, <s>"./src/**/*.{vue,js,ts,jsx,tsx}"</s><var>]</var>;
        </code>
    </x-slot>
</x-code>

<x-code id="bootstrap" title="Bootstrap in your project">
    <x-slot name="subtitle">
        <p>If you want to add css framework such as bootsrap instead of tailwindcss for styling then you have do something command as we mention in below.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm install bootstrap@5.3.0-alpha1 bootstrap-icons</b>
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">Now you have to add that package installed on your main.js file right before your main styles</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <var>import</var> <s>"bootstrap/dist/css/bootstrap.css"</s><b>;</b>
            <var>import</var> <s>"bootstrap-icons/font/bootstrap-icons.css"</s><b>;</b>

            <var>import</var> <s>"./assets/css/main.css"</s><b>;</b>
            <var>import</var> <s>"./assets/scss/main.scss"</s><b>;</b>
        </code>
    </x-slot>
</x-code>

<x-code id="sass" title="Sass Pre-Processors">
    <x-slot name="subtitle">
        <p>We can add sass preprocessor like sass, less or stylus, all you need to do is execute command below and then you have add your main sass file into your main javascript project.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm install -D sass</b>
        </code>
    </x-slot>
</x-code>

<x-code id="plugins" title="Integrated with Axios">
    <x-slot name="subtitle">
        <p>With Axios you can make your fetching data to the server easier and you can add into your project with code below.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm install axios</b>
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">This axios package can be put in the plugins folder, along with other plugins. But for package like axios that cannot build in with vue, we can modify this package in the axios.js file with export default object that contain method install so when it used in vue instace this package will be able directly in all components within just called this.$http.</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <var>import</var> <u>Axios</u> <s>"axios"</s><b>;</b>

            <var>export default</var> <em>{</em>
                <em style="margin-left: 2rem">install</em><var>(</var><u>app</u>, <u>options</u><var>)</var> <var>{</var>
                    <u style="margin-left: 4rem">app.config.globalProperties.$http</u> = <u>Axios</u>;
                <var style="margin-left: 2rem">}</var>
            <em>}</em>
        </code>
    </x-slot>

    <x-slot name="subtitle2">
        <p class="my-2">Include your index.js on plugins folder to main.js and use it into an instance of vue object. Because our plugins index.js can contain many of plugin like axios or the other so we have to add all and then we use it.</p>
    </x-slot>

    <x-slot name="code2">
        <code>
            <var>import</var> <u>plugins</u> <var>from</var> <s>"./plugins"</s><b>;</b>

            <var>for</var> <em>(</em><bdi>const </bdi> <q>key</q> in <u>plugins</u><em>)</em> <em>{</em>
            <q style="margin-left: 2rem">app</q>.<em>use(<u>plugins</u><q>[key]</q>)</em><b>;</b>
            <em>}</em>
        </code>
    </x-slot>
</x-code>

<x-code id="state_management" title="State Management">
    <x-slot name="subtitle">
        <p>In vue we know a state that can be put into a tag or we can remove or add an element within that state and to make us easier to transfer the data to any elements or component it is going to be tricky.</p>
        <p>So we can add a package that will manage our state, it is called Vuex.</p>
    </x-slot>

    <x-slot name="code">
        <code>
            <em>$</em>&nbsp;<b>npm install vuex</b>
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">After we setting up vuex state management in file store/index.js now we need to use it like we have done in above.</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <var>import</var> <u>store</u> <var>from</var> <s>"./store"</s><b>;</b>

            <q>app</q>.<em>use(<u>store</u>)</em><b>;</b>
        </code>
    </x-slot>
</x-code>

<x-code title="Implementing code">
    <x-slot name="subtitle">
        <p>To implements all the package that we are going to use, you have to add them into a plugins folder and import it to the main.js.</p>
        <p>Project file structure is going to be like this :</p>
    </x-slot>

    <x-slot name="code">
        <code style="white-space: pre">
src
|-- App.vue
|-- main.js
|-- assets
    |-- css 
        |-- main.css
    |-- scss 
        |-- main.scss
    |-- images 
    |-- icons 
|-- components
|-- plugins
    |-- index.js
|-- views
    |-- auth
    |-- errors
    |-- layouts
    |-- pages
|-- router
    |-- index.js
    |-- routes.js
|-- store
    |-- states
    |-- index.js
    |-- state.js
    |-- getters.js
    |-- actions.js
    |-- mutations.js
        </code>
    </x-slot>

    <x-slot name="subtitle1">
        <p class="my-2">You can install base on project structure by following this command</p>
    </x-slot>

    <x-slot name="code1">
        <code>
            <em>$</em>&nbsp;<b>mkdir -p src/{assets/{css,scss,images,icons},components}</b>
            <em>$</em>&nbsp;<b>mkdir -p src/{views/{auth,errors,layouts,pages},router,store/states,plugins}</b>

            <em>$</em>&nbsp;<b>touch src/router/{index,routes}.js</b>
            <em>$</em>&nbsp;<b>touch src/store/{index,state,getters,actions,mutations}.js</b>
            <em>$</em>&nbsp;<b>touch src/assets/{css/main.css,scss/main.scss}</b>
        </code>
    </x-slot>
</x-code>