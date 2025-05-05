<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-destinations">
                                <a href="#endpoints-GETapi-destinations">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-destinations--id-">
                                <a href="#endpoints-GETapi-destinations--id-">GET api/destinations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-crewMembers">
                                <a href="#endpoints-GETapi-crewMembers">GET api/crewMembers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-crewMembers--id-">
                                <a href="#endpoints-GETapi-crewMembers--id-">GET api/crewMembers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-technologies">
                                <a href="#endpoints-GETapi-technologies">GET api/technologies</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-technologies--id-">
                                <a href="#endpoints-GETapi-technologies--id-">GET api/technologies/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETdestination">
                                <a href="#endpoints-GETdestination">GET destination</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETdestination--slug-">
                                <a href="#endpoints-GETdestination--slug-">GET destination/{slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcrew">
                                <a href="#endpoints-GETcrew">GET crew</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETcrew--slug-">
                                <a href="#endpoints-GETcrew--slug-">GET crew/{slug}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETtechnology">
                                <a href="#endpoints-GETtechnology">GET technology</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETtechnology--slug-">
                                <a href="#endpoints-GETtechnology--slug-">GET technology/{slug}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 26, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-destinations">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-destinations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/destinations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/destinations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-destinations">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-destinations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-destinations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-destinations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-destinations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-destinations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-destinations" data-method="GET"
      data-path="api/destinations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-destinations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-destinations"
                    onclick="tryItOut('GETapi-destinations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-destinations"
                    onclick="cancelTryOut('GETapi-destinations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-destinations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/destinations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-destinations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-destinations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-destinations--id-">GET api/destinations/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-destinations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/destinations/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/destinations/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-destinations--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-destinations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-destinations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-destinations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-destinations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-destinations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-destinations--id-" data-method="GET"
      data-path="api/destinations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-destinations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-destinations--id-"
                    onclick="tryItOut('GETapi-destinations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-destinations--id-"
                    onclick="cancelTryOut('GETapi-destinations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-destinations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/destinations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-destinations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-destinations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-destinations--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the destination. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-crewMembers">GET api/crewMembers</h2>

<p>
</p>



<span id="example-requests-GETapi-crewMembers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/crewMembers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/crewMembers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-crewMembers">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-crewMembers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-crewMembers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-crewMembers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-crewMembers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-crewMembers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-crewMembers" data-method="GET"
      data-path="api/crewMembers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-crewMembers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-crewMembers"
                    onclick="tryItOut('GETapi-crewMembers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-crewMembers"
                    onclick="cancelTryOut('GETapi-crewMembers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-crewMembers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/crewMembers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-crewMembers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-crewMembers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-crewMembers--id-">GET api/crewMembers/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-crewMembers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/crewMembers/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/crewMembers/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-crewMembers--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-crewMembers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-crewMembers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-crewMembers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-crewMembers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-crewMembers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-crewMembers--id-" data-method="GET"
      data-path="api/crewMembers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-crewMembers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-crewMembers--id-"
                    onclick="tryItOut('GETapi-crewMembers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-crewMembers--id-"
                    onclick="cancelTryOut('GETapi-crewMembers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-crewMembers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/crewMembers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-crewMembers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-crewMembers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-crewMembers--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the crewMember. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-technologies">GET api/technologies</h2>

<p>
</p>



<span id="example-requests-GETapi-technologies">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/technologies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technologies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-technologies">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-technologies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-technologies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technologies"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-technologies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technologies">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-technologies" data-method="GET"
      data-path="api/technologies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-technologies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-technologies"
                    onclick="tryItOut('GETapi-technologies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-technologies"
                    onclick="cancelTryOut('GETapi-technologies');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-technologies"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/technologies</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-technologies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-technologies"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-technologies--id-">GET api/technologies/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-technologies--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/technologies/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/technologies/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-technologies--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-technologies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-technologies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-technologies--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-technologies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-technologies--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-technologies--id-" data-method="GET"
      data-path="api/technologies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-technologies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-technologies--id-"
                    onclick="tryItOut('GETapi-technologies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-technologies--id-"
                    onclick="cancelTryOut('GETapi-technologies--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-technologies--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/technologies/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-technologies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-technologies--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-technologies--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the technology. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETdestination">GET destination</h2>

<p>
</p>



<span id="example-requests-GETdestination">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/destination" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/destination"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETdestination">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6InVhSUJXanFsbC9rRjExOTRzR0xjK0E9PSIsInZhbHVlIjoiV1BpVFdTMnpuTTQwVlQxTXdqRjNsT05oeHljcjBhUHpuVStCQ2pmTWYxVDhVdkJucmM3bmRQVWVlcFBuWlJmdFV5SVBJMjdPTGJwb1VQVW1rK0gwSEJsblhJZm1nZzBKSFpUc0Z2cnBHczZ5bW1iVmpXUmI1ZlZUM0dsclY1eUwiLCJtYWMiOiJmMzQ0Y2FhYzNmZjFiZWUxNzYyNWMxNzkzNmRhZTNlNjNjMzE2OGQ3NzAyMjkwZTgzMWJhZjlmY2NjZWU5ZDExIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlNOL2RYWVRpem9hL09YK2psSDlUK1E9PSIsInZhbHVlIjoiM2tWUmdoZVAxRGVwV0w0aGh3aHI3c1gwcWxFV0VUaDFDV0pDN3ArcjFrRFptc2tORFMzcGVoS25sYnd2UHhLM1JHSW1YdnZwM0syTHhXL211SHNzdWhIbXUxeDJOd0U4ZDZlbnlvQzFyU0E1WUt6cVZOclRCK1ByRWk0bTRiK0IiLCJtYWMiOiI1MWFkZWM5YmJhOTAyMTcxMjRkN2U4ODU2OTBlY2M0ODFkZGExZjlkMjMzNzIwNGYwMTI3YmZmNTg3ZTNmZjUzIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;title&gt;Space Tourism&lt;/title&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://[::1]:5173/resources/css/app.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.js&quot;&gt;&lt;/script&gt;&lt;/head&gt;
&lt;body class=&quot;m-0 font-sans bg-[#0b0d17] text-white&quot;&gt;

    &lt;nav class=&quot;justify-between bg-[#1f2235] flex gap-8 p-4 px-6&quot;&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;a href=&quot;/&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Home&lt;/a&gt;
        &lt;a href=&quot;/destination&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Destination&lt;/a&gt;
        &lt;a href=&quot;/crew&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Crew&lt;/a&gt;
        &lt;a href=&quot;/technology&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Technology&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;/div&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
        &lt;a href=&quot;/login&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Login&lt;/a&gt;
        &lt;a href=&quot;/register&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Register&lt;/a&gt;
    &lt;/div&gt;
        &lt;/nav&gt;

    &lt;main class=&quot;px-10 py-16 max-w-[1200px] mx-auto&quot;&gt;
            &lt;div class=&quot;text-center mt-10&quot;&gt;
        &lt;h1 class=&quot;text-4xl mb-10 font-semibold tracking-wide&quot;&gt;Explore the Universe&lt;/h1&gt;

        &lt;div class=&quot;flex flex-wrap justify-center gap-10&quot;&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-moon.png&quot; alt=&quot;Moon&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Moon&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;See our planet as you&rsquo;ve never seen it before. A perfect relaxing trip away to help regain perspective and come back refreshed. While you&rsquo;re there, take in some history by visiting the Luna 2 and Apollo 11 landing sites.&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 384,400 km&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 3 days&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/moon&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-mars.png&quot; alt=&quot;Mars&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Mars&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Don&rsquo;t forget to pack your hiking boots. You&rsquo;ll need them to tackle Olympus Mons, the tallest planetary mountain in our solar system. It&rsquo;s two and a half times the size of Everest!&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 225 mil. km&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 9 months&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/mars&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-europa.png&quot; alt=&quot;Europa&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Europa&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;The smallest of the four Galilean moons orbiting Jupiter, Europa is a winter lover&rsquo;s dream. With an icy surface, it&rsquo;s perfect for a bit of ice skating, curling, hockey, or simple relaxation in your snug wintery cabin.&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 628 MIL. km&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 3 years&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/europa&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-titan.png&quot; alt=&quot;Titan&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Titan&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;The only moon known to have a dense atmosphere other than Earth, Titan is a home away from home (just a few hundred degrees colder!). As a bonus, you get striking views of the Rings of Saturn.&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 1.6 BIL. km&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 7 years&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/titan&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-europa.png&quot; alt=&quot;Pluton&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Pluton&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;C&amp;#039;est pluton !&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 7 m&egrave;tres&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 12 minutes&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/pluton&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-mars.png&quot; alt=&quot;lkn&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;lkn&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;ophij&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; lkh&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; mh&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/lkn&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-cest-la-bonne.png&quot; alt=&quot;C&amp;#039;est la bonne&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;C&amp;#039;est la bonne&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;NON&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; c&amp;#039;est l&agrave;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; maintenant&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/cest-la-bonne&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-ee.png&quot; alt=&quot;eeprmzgnk&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;eeprmzgnk&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;ee&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; ee&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; e&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/eeprmzgnk&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-moon.png&quot; alt=&quot;ppppppp&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;ppppppp&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;jkbgl&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; kljhv&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 5 minuts&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/ppppppp&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-mars.png&quot; alt=&quot;c&amp;#039;est good&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;c&amp;#039;est good&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;ouiiiiiiiiiiiiii&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 0&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; now&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/cest-good&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-europa.png&quot; alt=&quot;lmkm,&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;lmkm,&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;jkb&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; io&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; khj&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/lmkm&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-mars.png&quot; alt=&quot;aaaaaaaaaa&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;aaaaaaaaaa&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;zzzzzzzzzz&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; eeeeeeee&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; rrrrrrrr&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/aaaaaaaaaa&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/destination/image-mars.png&quot; alt=&quot;lasttest&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;lasttest&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;the last&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; dd&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; dd&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/lasttest&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/moon.png&quot; alt=&quot;Lune&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Lune&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Satellite naturel de la Terre&lt;/p&gt;
                    
                    &lt;p class=&quot;mt-2&quot;&gt;&lt;strong&gt;Distance:&lt;/strong&gt; 384 400 km&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Travel Time:&lt;/strong&gt; 3 jours&lt;/p&gt;
                    &lt;a href=&quot;http://localhost/destination/lune&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                     
                &lt;/div&gt;
                    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/main&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;script&gt;
    function toggleDropdown() {
        const menu = document.getElementById(&#039;dropdownMenu&#039;);
        menu.classList.toggle(&#039;hidden&#039;);
    }

    // Fermer si clic en dehors
    document.addEventListener(&#039;click&#039;, function (event) {
        const button = event.target.closest(&#039;button&#039;);
        const dropdown = document.getElementById(&#039;dropdownMenu&#039;);

        if (!event.target.closest(&#039;#dropdownMenu&#039;) &amp;&amp; !button) {
            dropdown.classList.add(&#039;hidden&#039;);
        }
    });
&lt;/script&gt;

</code>
 </pre>
    </span>
<span id="execution-results-GETdestination" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETdestination"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETdestination"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETdestination" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdestination">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETdestination" data-method="GET"
      data-path="destination"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETdestination', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETdestination"
                    onclick="tryItOut('GETdestination');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETdestination"
                    onclick="cancelTryOut('GETdestination');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETdestination"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>destination</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETdestination"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETdestination"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETdestination--slug-">GET destination/{slug}</h2>

<p>
</p>



<span id="example-requests-GETdestination--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/destination/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/destination/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETdestination--slug-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjdIakZYamZ0QVBjWGRYOWZCZ082V2c9PSIsInZhbHVlIjoiWTNQSUtlTStSMllJYXpxTFVzVWh2ZnlTd3J1eDM1dFl4blRaUXA4aWwvc0RBbUlhNjk1cEJNZk8yK1RNdjduU3IxU2lmZnVYZW9Yam1qZDQrVnVqanBxaEZVZWZuNDNsWnlJaTBQOTkwWUNjSkY1OXlDRy95WUZ4b05wNVArVUwiLCJtYWMiOiJjOGVlZWJiMjZmM2IxNzc5N2RhOTAzZjFjYmFiODQyYWQ2N2M2Mzg2MmY5Yjg4MDQwYzhiOWY3YmM1ZDA1NzU3IiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Iml2UjBBWVd4UjBCNlN1ZCs2dHVMeVE9PSIsInZhbHVlIjoiMHozSmxaWHRhQ0t2TVRzQlhkNkQxYXo4djN2TmZORWo2bDBCV2Z3UnMybW80VzhHbVhHVUNDSjhoM3RaTFQ0Z1NNbG11WTR0dnZCeGNMZi9HWDFqb21ERXBUNGhUd3VhaUVDMkp1aUhxcGhkQlpsSzl3LzQvYXQxMzc0NExkVTEiLCJtYWMiOiIwNjRiNDMzZGI1ZjBjOWUxZDliNWY3Yzc5NmYwMmYyMDJjNDM4YmE5MTU1NTIwMGE2YTlhNmNhMGJhMTc0NzNhIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Destination].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETdestination--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETdestination--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETdestination--slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETdestination--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdestination--slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETdestination--slug-" data-method="GET"
      data-path="destination/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETdestination--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETdestination--slug-"
                    onclick="tryItOut('GETdestination--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETdestination--slug-"
                    onclick="cancelTryOut('GETdestination--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETdestination--slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>destination/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETdestination--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETdestination--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="slug"                data-endpoint="GETdestination--slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the destination. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETcrew">GET crew</h2>

<p>
</p>



<span id="example-requests-GETcrew">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/crew" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/crew"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcrew">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6InROZWcxVDFiQ3ltbzN0OHdYK21ZV3c9PSIsInZhbHVlIjoicnNJZm1JdTNSZGNaY1NmM3UrRkh0VFRmRVowSXVYSXV1MWovN3Rhd0I4eHlVbnYwTTdGV0ZSQU1mUmVHNkF2dmFSSHdYVEdseEtpcUJld3REZEZUSTQxR3gvWFVCNitsdDRjZlRuMG5FOFA4Yjc5aitJYVRkM0tIM01EOWRNWC8iLCJtYWMiOiIwNmE2MDAxYzNlNTc0YzEwZWRkNWY1OGQ0NTgwZWVjNTYwM2FkZmVjYmRhYWY4M2E5MTgxZGE1ZTg1YWViNjQ3IiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6InJtRWtTamZ0MC9MSndScDVaNDZPL0E9PSIsInZhbHVlIjoiaU9GdEpqcm1TeXh3cGtqczVjNnh5dVZBei91YnIyYzRpblE3ZTU0dU4zdGhjd3JjeFMwSjF1UFE5K2s1bmNIWkd4R1ppYXhOSk1oeS9rbzBTTVZhNmpLSWpTS1RSejVzQk9Rck1mSHBadlZOS3A3NEZzbGZQbk1OdGVNWERpN1ciLCJtYWMiOiIzZjZiNjg0NjMxOWViOTM3MWI4ZDBjNWU3ZDk1OWY1ZGQ3OGQzYmJlZGRhOWNmYTFkM2FhZWRkMDliNGE5YWY1IiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;title&gt;Space Tourism&lt;/title&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://[::1]:5173/resources/css/app.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.js&quot;&gt;&lt;/script&gt;&lt;/head&gt;
&lt;body class=&quot;m-0 font-sans bg-[#0b0d17] text-white&quot;&gt;

    &lt;nav class=&quot;justify-between bg-[#1f2235] flex gap-8 p-4 px-6&quot;&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;a href=&quot;/&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Home&lt;/a&gt;
        &lt;a href=&quot;/destination&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Destination&lt;/a&gt;
        &lt;a href=&quot;/crew&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Crew&lt;/a&gt;
        &lt;a href=&quot;/technology&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Technology&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;/div&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
        &lt;a href=&quot;/login&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Login&lt;/a&gt;
        &lt;a href=&quot;/register&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Register&lt;/a&gt;
    &lt;/div&gt;
        &lt;/nav&gt;

    &lt;main class=&quot;px-10 py-16 max-w-[1200px] mx-auto&quot;&gt;
            &lt;div class=&quot;text-center mt-10&quot;&gt;
        &lt;h1 class=&quot;text-4xl mb-10 font-semibold tracking-wide&quot;&gt;Explore the Universe&lt;/h1&gt;

        &lt;div class=&quot;flex flex-wrap justify-center gap-10&quot;&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/crew/image-douglas-hurley.png&quot; alt=&quot;Douglas Hurley&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Douglas Hurley&lt;/h2&gt;

                    &lt;h2 class=&quot;mt-4 text-1xl&quot;&gt;Commander&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Douglas Gerald Hurley is an American engineer, former Marine Corps pilot and former NASA astronaut. He launched into space for the third time as commander of Crew Dragon Demo-2.&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/crew/douglas-hurley&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/crew/image-mark-shuttleworth.png&quot; alt=&quot;Mark Shuttleworth&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Mark Shuttleworth&lt;/h2&gt;

                    &lt;h2 class=&quot;mt-4 text-1xl&quot;&gt;Mission Specialist&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Linux-based Ubuntu operating system. Shuttleworth became the first South African to travel to space as a space tourist.&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/crew/mark-shuttleworth&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/crew/image-victor-glover.png&quot; alt=&quot;Victor Glover&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Victor Glover&lt;/h2&gt;

                    &lt;h2 class=&quot;mt-4 text-1xl&quot;&gt;Pilot&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Pilot on the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the U.S. Navy where he pilots an F/A-18.He was a crew member of Expedition 64, and served as a station systems flight engineer. &lt;/p&gt;

                    &lt;a href=&quot;http://localhost/crew/victor-glover&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/crew/image-anousheh-ansari.png&quot; alt=&quot;Anousheh Ansari&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Anousheh Ansari&lt;/h2&gt;

                    &lt;h2 class=&quot;mt-4 text-1xl&quot;&gt;Flight Engineer&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to fly to the ISS, and the first Iranian in space. &lt;/p&gt;

                    &lt;a href=&quot;http://localhost/crew/anousheh-ansari&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/main&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;script&gt;
    function toggleDropdown() {
        const menu = document.getElementById(&#039;dropdownMenu&#039;);
        menu.classList.toggle(&#039;hidden&#039;);
    }

    // Fermer si clic en dehors
    document.addEventListener(&#039;click&#039;, function (event) {
        const button = event.target.closest(&#039;button&#039;);
        const dropdown = document.getElementById(&#039;dropdownMenu&#039;);

        if (!event.target.closest(&#039;#dropdownMenu&#039;) &amp;&amp; !button) {
            dropdown.classList.add(&#039;hidden&#039;);
        }
    });
&lt;/script&gt;

</code>
 </pre>
    </span>
<span id="execution-results-GETcrew" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcrew"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcrew"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcrew" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcrew">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcrew" data-method="GET"
      data-path="crew"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcrew', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcrew"
                    onclick="tryItOut('GETcrew');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcrew"
                    onclick="cancelTryOut('GETcrew');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcrew"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>crew</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETcrew"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcrew"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETcrew--slug-">GET crew/{slug}</h2>

<p>
</p>



<span id="example-requests-GETcrew--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/crew/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/crew/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETcrew--slug-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6InVpYW9JcElJU2FjZ2M1REI0MmpXWUE9PSIsInZhbHVlIjoiakZKaW42TUw5YjJUUEZBUGRGQXZmRzNheHVVMFpHVDc4cXFpb3NNVG4wMnBvOHhuQ3JlQzl1OUNkRW80Q3FsZHRudkpodnc4bmU2dGpiTmpuM1hMZkN6WFgyN0VqU05xeWNpKzdjbW9sVm8rN2R3eXpZL3lndG1OK3ZkMkFNMzQiLCJtYWMiOiJmNmEzNWQ5MWRkZjc1MWM2MWIyOGIyZjBkMGQxMGMwMGY4MzYyZTQ3YWFjNWZlNDM3YjA3ODZhNWJlZGExNjBjIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImhTQVlBL3d5MFM2Z1FPOWRDcDJRREE9PSIsInZhbHVlIjoiRUZydHlkZXp5Q2lvRmI3UEkvS0kyTmhYLy9sb0ltVlcyK3pjTVZRTXhzVWxRa2JYSDRWQWhvbTZqTmp5T04xNGxyaDdqdEprRGpES2J6S0ZBRWxnNFFSTS9ESlIxYWIrU250VzRtbHV6TUJueVhTWExqdGU4MUd3NkZVeEI3WmkiLCJtYWMiOiI2MWY2ZTE5MWU0NGFjNzdhMGI2NGRmOWExZTUxOGI3MTI5NjM0MDc3ZmE4ZjZiY2FlMmIyMjE0NDdjNWU4MDU0IiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\CrewMember].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETcrew--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETcrew--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETcrew--slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETcrew--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcrew--slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETcrew--slug-" data-method="GET"
      data-path="crew/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETcrew--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETcrew--slug-"
                    onclick="tryItOut('GETcrew--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETcrew--slug-"
                    onclick="cancelTryOut('GETcrew--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETcrew--slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>crew/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETcrew--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETcrew--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="GETcrew--slug-"
               value="architecto"
               data-component="url">
    <br>
<p>The slug of the crew. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETtechnology">GET technology</h2>

<p>
</p>



<span id="example-requests-GETtechnology">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/technology" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/technology"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETtechnology">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
set-cookie: XSRF-TOKEN=eyJpdiI6IktJUzkyNmNxcTMySXE5aDc4cXp5YUE9PSIsInZhbHVlIjoiNWZyQXFJSUlmQVM2VnE5WTdSZktCZGFrZENSSXhjWjA1bHZoYisxTzVTRVVRNlVlcUhFd1BkU1gvREUrTWtwbFNvZnZIR3JiVEo0a01XWGsyMDI2RTFWR0hKNXFPcWtKU0J4akFKUHNEeVpXT3lCYWI3NW14Z2dxUWVqQ2ZjcDMiLCJtYWMiOiJjNGIwMTU5YmRiNTVkZDU2ZjJmZGRlYzUwMDE0YmYyZGI2NjhlNTViNmVmOTVlYmYyNTRkNzY5YmRmNTQ0NTEzIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6Ik9WY3dkVlE1YU0yLzVyZ1BDT0UvdGc9PSIsInZhbHVlIjoieHhwcmRxNVIvbGNIcU5XNEhtVE1UQjMzNzI1alVLdXhXY1I0Zm5kdTB5OGNtd0FhUGIzN0lzbzFpVnJVWU5ZTnFrVktjaUxCaVczYkZZL1lucFNBVkI5dU45NEk4dWFDQW4rUjluRVc3S3NIbWFZaUNXbGVxaXNQYmZ6M1VnUUsiLCJtYWMiOiI2OWMxYjRiYTg5ZTgyZmJkMDBjNGQ3MmM3OGZjOTBjYzdiNjc0MTNlMzI5YjA0NGQ2MWEyNWZhMGQxOGU2MDFmIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;title&gt;Space Tourism&lt;/title&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/@vite/client&quot;&gt;&lt;/script&gt;&lt;link rel=&quot;stylesheet&quot; href=&quot;http://[::1]:5173/resources/css/app.css&quot; /&gt;&lt;script type=&quot;module&quot; src=&quot;http://[::1]:5173/resources/js/app.js&quot;&gt;&lt;/script&gt;&lt;/head&gt;
&lt;body class=&quot;m-0 font-sans bg-[#0b0d17] text-white&quot;&gt;

    &lt;nav class=&quot;justify-between bg-[#1f2235] flex gap-8 p-4 px-6&quot;&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;a href=&quot;/&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Home&lt;/a&gt;
        &lt;a href=&quot;/destination&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Destination&lt;/a&gt;
        &lt;a href=&quot;/crew&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Crew&lt;/a&gt;
        &lt;a href=&quot;/technology&quot; class=&quot;hover:underline text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Technology&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex gap-8&quot;&gt;
            &lt;/div&gt;
        &lt;div class=&quot;flex gap-8&quot;&gt;
        &lt;a href=&quot;/login&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Login&lt;/a&gt;
        &lt;a href=&quot;/register&quot; class=&quot;text-white font-bold hover:opacity-70 transition-opacity duration-200&quot;&gt;Register&lt;/a&gt;
    &lt;/div&gt;
        &lt;/nav&gt;

    &lt;main class=&quot;px-10 py-16 max-w-[1200px] mx-auto&quot;&gt;
            &lt;div class=&quot;text-center mt-10&quot;&gt;
        &lt;h1 class=&quot;text-4xl mb-10 font-semibold tracking-wide&quot;&gt;Explore the Universe&lt;/h1&gt;

        &lt;div class=&quot;flex flex-wrap justify-center gap-10&quot;&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/technology/image-launch-vehicle-portrait.jpg&quot; alt=&quot;Launch vehicle&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Launch vehicle&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a payload from Earth&amp;#039;s surface to space, usually to Earth orbit or beyond. Our WEB-X carrier rocket is the most powerful in operation. Standing 150 metres tall, it&amp;#039;s quite an awe-inspiring sight on the launch pad!&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/technology/launch-vehicle&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/technology/image-spaceport-portrait.jpg&quot; alt=&quot;Spaceport&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Spaceport&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;A spaceport or cosmodrome is a site for launching (or receiving) spacecraft, by analogy to the seaport for ships or airport for aircraft. Based in the famous Cape Canaveral, our spaceport is ideally situated to take advantage of the Earth&rsquo;s rotation for launch.&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/technology/spaceport&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/technology/image-space-capsule-portrait.jpg&quot; alt=&quot;Space capsule&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;Space capsule&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;A space capsule is an often-crewed spacecraft that uses a blunt-body reentry capsule to reenter the Earth&amp;#039;s atmosphere without wings. Our capsule is where you&amp;#039;ll spend your time during the flight. It includes a space gym, cinema, and plenty of other activities to keep you entertained.&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/technology/space-capsule&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                            &lt;div class=&quot;flex flex-col justify-between w-1/4 p-5 bg-[#b9bfd3] rounded-xl shadow-md text-black&quot;&gt;
                    &lt;img src=&quot;http://localhost/media/images/technology/image-spaceport-portrait.jpg&quot; alt=&quot;ddr:zmkgnrlmgbrf&quot; class=&quot;w-full h-auto rounded-lg&quot;&gt;
                    
                    &lt;h2 class=&quot;mt-4 text-2xl font-bold&quot;&gt;ddr:zmkgnrlmgbrf&lt;/h2&gt;
                    
                    &lt;p class=&quot;text-sm text-gray-600 mt-1&quot;&gt;ddbmqfkenb&lt;/p&gt;

                    &lt;a href=&quot;http://localhost/technology/ddrzmkgnrlmgbrf&quot;
                        class=&quot;inline-block mt-4 px-4 py-2 bg-[#323753] text-white rounded hover:bg-[#0b0d17] transition&quot;&gt;
                         More
                     &lt;/a&gt;
                &lt;/div&gt;
                    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/main&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;script&gt;
    function toggleDropdown() {
        const menu = document.getElementById(&#039;dropdownMenu&#039;);
        menu.classList.toggle(&#039;hidden&#039;);
    }

    // Fermer si clic en dehors
    document.addEventListener(&#039;click&#039;, function (event) {
        const button = event.target.closest(&#039;button&#039;);
        const dropdown = document.getElementById(&#039;dropdownMenu&#039;);

        if (!event.target.closest(&#039;#dropdownMenu&#039;) &amp;&amp; !button) {
            dropdown.classList.add(&#039;hidden&#039;);
        }
    });
&lt;/script&gt;

</code>
 </pre>
    </span>
<span id="execution-results-GETtechnology" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETtechnology"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETtechnology"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETtechnology" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETtechnology">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETtechnology" data-method="GET"
      data-path="technology"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETtechnology', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETtechnology"
                    onclick="tryItOut('GETtechnology');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETtechnology"
                    onclick="cancelTryOut('GETtechnology');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETtechnology"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>technology</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETtechnology"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETtechnology"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETtechnology--slug-">GET technology/{slug}</h2>

<p>
</p>



<span id="example-requests-GETtechnology--slug-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/technology/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/technology/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETtechnology--slug-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
set-cookie: XSRF-TOKEN=eyJpdiI6IjRkbzJHdXRhczk5UUFPM3dxM3lQU2c9PSIsInZhbHVlIjoiQW5nbXpTdEVmQ1RBWTMwQ2ZYTEpEUkQrdHh1S2FMbkJvZVVBVld4bzB3K3lhZi91R3ViMVBkY1Y4RU9kYVY0RDJGcVJ0Z3c5dGRFWHB6eVhIY3dXejZZRTFwWFJqVHI1dGV6KzFOdzBscDRVMkNyN3FQb1FHWDJBTTNhb3hDL0YiLCJtYWMiOiI2NThjZTM1NzU0ZGQ3Y2RiNGFkYzg2YzA3YTZkZjJmNDEyY2NjODA1Mzk2ZmMzZDk3MzEzOTJkNDYzMWFkMDZkIiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkU2R2xIQW43d1ZoNXN5eDhOTWh3VHc9PSIsInZhbHVlIjoiT0N1QzZ3ZVJJazQyRjU1UytxelpaNEZTK0FaRk5ZN2x2MEtqNi9ITE5EU0doeW4yMFVTUmlSaGVjYzFHQWU1L1REaFVla0xma1hGbzJjZTk1N245QlNNYnM0R3I0K3B0ZDlYR2hxY0JvL243RmloamFUbWhWL3U0UTVnbWZHdC8iLCJtYWMiOiI5NTc2MDQ0NDA0NWNhMjAyZTIwZjllZWIwOGJjZTc2MjkyOTZiNDYyNjQzNTBhMDU2ZjZiODEzZDcwNDY5ZmE4IiwidGFnIjoiIn0%3D; expires=Sat, 26 Apr 2025 10:37:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Technology].&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETtechnology--slug-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETtechnology--slug-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETtechnology--slug-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETtechnology--slug-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETtechnology--slug-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETtechnology--slug-" data-method="GET"
      data-path="technology/{slug}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETtechnology--slug-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETtechnology--slug-"
                    onclick="tryItOut('GETtechnology--slug-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETtechnology--slug-"
                    onclick="cancelTryOut('GETtechnology--slug-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETtechnology--slug-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>technology/{slug}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETtechnology--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETtechnology--slug-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="slug"                data-endpoint="GETtechnology--slug-"
               value="1"
               data-component="url">
    <br>
<p>The slug of the technology. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
