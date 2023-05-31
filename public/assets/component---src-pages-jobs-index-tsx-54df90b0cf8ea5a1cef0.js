"use strict";
(self.webpackChunkvehikl_website = self.webpackChunkvehikl_website || []).push([
    [909],
    {
        9219: function (e, t, n) {
            n.r(t);
            var a = n(7294),
                i = n(7764),
                l = n(8780),
                r = n(7528),
                o = n(5689);
            t.default = function (e) {
                var t = e.data.jobs.nodes;
                return a.createElement(
                    i.T,
                    {
                        title: "Jobs",
                        description: "Jobs at Vehikl",
                        ogUrl: "https://vehikl.com/jobs",
                    },
                    a.createElement(l.jL, {
                        heading: "Jobs",
                        description:
                            "Vehikl invests in our clients and our employees. If you are someone eager to learn, collaborate with others, and produce excellent results, then apply today to join our fast growing team!",
                    }),
                    a.createElement(
                        l.W2,
                        null,
                        t.map(function (e) {
                            return a.createElement(
                                l.Zb,
                                { variant: "fancy", key: e.id },
                                a.createElement(r.X6, { as: "h2" }, e.title),
                                a.createElement(
                                    r.nv,
                                    { className: "mb-4" },
                                    e.description
                                ),
                                a.createElement(
                                    r.nv,
                                    { className: "mb-8 italic" },
                                    "We're currently only hiring applicants that reside in ",
                                    e.location,
                                    "."
                                ),
                                a.createElement(
                                    o.zx,
                                    { as: "link", to: e.url },
                                    "View position"
                                )
                            );
                        })
                    )
                );
            };
        },
    },
]);
//# sourceMappingURL=component---src-pages-jobs-index-tsx-54df90b0cf8ea5a1cef0.js.map
