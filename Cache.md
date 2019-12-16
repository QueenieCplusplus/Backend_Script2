# Cache it in Cache File
application/cache 
Web Page Caching by using php framework called Codelgniter.

# Reason Why to Cache
to render Dynamic Info in  Nearby Static Pages:

the amount of "dynamic info" displayed in pages will correlate directly to the Server Resources, Memory, and Processing cycles utilized, which affect your page load speeds. 

By caching pages, since they are saved in their fully rendered state, you can achieve performance that nears that of static web pages.

# How it Processes in Caching
matters with Max-Age.

Caching can be "enabled on a per-page basis" , and can be set the "length of time"  that a page should remain cached before being refreshed. 

When a page is loaded for the first time, the cache file will be written to your application/cache folder. 

On subsequent page loads the cache file will be retrieved and sent to the requesting user’s browser. If it has expired, it will be deleted and refreshed before being sent to the browser.

# Code to add Cache 
Where $n is the number of minutes wishing the page to remain cached between refreshes.

      // in Controller
      $this->output->cache($n);
      
# Code to remove Cache
If you no longer wish to cache a file you can remove the caching tag and it will no longer be refreshed when it expires.

      // Deletes cache for the currently requested URI
      $this->output->delete_cache();

      // Deletes cache for /foo/bar
      $this->output->delete_cache('/foo/bar');
      
