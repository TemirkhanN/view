# view


## DEPRECATED

## It seemd like a good idea but now I think it is much more relevant to use:

```php
$result = SomeParticularView::create($data);
```

**Reasons:**  
1. It is more transparent(you can track what is used and where).
2. It is more reliable(much more relevant to declare ```PostView::create(Post $post): array``` than ```PostView::createView($context): mixed```
3. In 90% of the cases we need stateless/dependency-free factories(no overhead with usage and even testing). So we can use static calls:
```php

// this
$data = PostView::createView($post);

//instead of this
$viewFactory = new PostView();
$data = $view->createView($post);

```

You can more detailed "example" here [https://github.com/TemirkhanN/blog](https://github.com/TemirkhanN/blog/commit/ab34575a099ffd06dda27419b19196c5674a78d8)
