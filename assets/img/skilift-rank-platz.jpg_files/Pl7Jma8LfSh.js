;/*FB_PKG_DELIM*/

__d("PolarisChainedPostsRootQuery$Parameters",[],(function(a,b,c,d,e,f){"use strict";a={kind:"PreloadableConcreteRequest",params:{id:"5769983156460676",metadata:{},name:"PolarisChainedPostsRootQuery",operationKind:"query",text:null}};e.exports=a}),null);
__d("PolarisPostRootQuery$Parameters",[],(function(a,b,c,d,e,f){"use strict";a={kind:"PreloadableConcreteRequest",params:{id:"9763821883643951",metadata:{},name:"PolarisPostRootQuery",operationKind:"query",text:null}};e.exports=a}),null);
__d("PolarisDesktopPostRoot.entrypoint",["JSResourceForInteraction","PolarisPostRootQuery$Parameters"],(function(a,b,c,d,e,f,g){"use strict";a={getPreloadProps:function(a){a=a.routeParams;return{queries:{polarisPostRootQuery:{options:{},parameters:c("PolarisPostRootQuery$Parameters"),variables:{shortcode:a.shortcode}}}}},root:c("JSResourceForInteraction")("PolarisDesktopPostRoot.react").__setRef("PolarisDesktopPostRoot.entrypoint")};g["default"]=a}),98);
__d("PolarisMobilePostRoot.entrypoint",["JSResourceForInteraction","PolarisChainedPostsRootQuery$Parameters","PolarisPostRootQuery$Parameters","qex"],(function(a,b,c,d,e,f,g){"use strict";a={getPreloadProps:function(a){var b=a.routeParams;a=a.routeProps;var d={options:{},parameters:c("PolarisPostRootQuery$Parameters"),variables:{shortcode:b.shortcode}};return b.chaining===!0||c("qex")._("591")===!0?{queries:{polarisPostRootQuery:d,polarisPostChainingRootQuery:{options:{},parameters:c("PolarisChainedPostsRootQuery$Parameters"),variables:{data:{media_id:a.media_id}}}}}:{queries:{polarisPostRootQuery:d}}},root:c("JSResourceForInteraction")("PolarisMobilePostRoot.react").__setRef("PolarisMobilePostRoot.entrypoint")};g["default"]=a}),98);
__d("PolarisStoriesArchiveRoot.entrypoint",["JSResourceForInteraction"],(function(a,b,c,d,e,f,g){"use strict";a={getPreloadProps:function(a){return{queries:{}}},root:c("JSResourceForInteraction")("PolarisStoriesArchiveRoot.react").__setRef("PolarisStoriesArchiveRoot.entrypoint")};g["default"]=a}),98);