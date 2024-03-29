"use strict";
(self.webpackChunkvehikl_website = self.webpackChunkvehikl_website || []).push([
    [181],
    {
        640: function (e, t, a) {
            a.r(t);
            var r = a(7294),
                l = a(396),
                n = a(8780),
                i = a(2081),
                s = function (e) {
                    var t = e.name,
                        a = e.image,
                        n = e.title,
                        i = (0, l.d)(a);
                    return r.createElement(
                        "li",
                        {
                            key: t,
                            className:
                                "flex items-center flex-col text-center border-2 border-gray-800 rounded",
                        },
                        r.createElement(
                            "div",
                            {
                                className:
                                    "rounded-tr-lg rounded-tl-lg overflow-hidden w-full border-b-2 border-b-gray-800 bg-gradient-to-t from-gray-800/30 to-gray-900 pt-2 lg:pt-4",
                            },
                            i &&
                                r.createElement(l.G, {
                                    className: "h-full w-full object-cover",
                                    image: i,
                                    alt: t,
                                    loading: "lazy",
                                    imgClassName:
                                        "brightness-90 saturate-[.90]",
                                })
                        ),
                        r.createElement(
                            "div",
                            { className: "p-3 lg:p-4 flex flex-col" },
                            r.createElement(
                                "span",
                                {
                                    className:
                                        "font-medium text-sm lg:text-base text-gray-200",
                                },
                                t
                            ),
                            r.createElement(
                                "span",
                                {
                                    className:
                                        "text-gray-400 text-xs lg:text-sm text-center",
                                },
                                n
                            )
                        )
                    );
                };
            t.default = function (e) {
                var t = e.data.members.edges
                    .map(function (e) {
                        return {
                            title: e.node.title,
                            image: e.node.image,
                            name: e.node.name,
                            startDate: e.node.start_date,
                            id: e.node.id,
                        };
                    })
                    .sort(function (e, t) {
                        return (
                            new Date(e.startDate).valueOf() -
                            new Date(t.startDate).valueOf()
                        );
                    });
                return r.createElement(
                    n.T3,
                    {
                        title: "Team",
                        description: "We build exceptional web applications",
                        ogUrl: "https://vehikl.com/team",
                    },
                    r.createElement(
                        n.jL,
                        {
                            heading: "Our Team",
                            image: 4,
                            description:
                                "We're a group of proud test-driven developers and creative product designers who focus on writing clean, maintainable code.",
                        },
                        r.createElement(
                            i.zx,
                            {
                                as: "link",
                                to: "/jobs/developer/",
                                className: "mt-8",
                            },
                            "Join our team"
                        )
                    ),
                    r.createElement(
                        n.W2,
                        null,
                        r.createElement(
                            "ul",
                            {
                                className:
                                    "grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-8",
                            },
                            t.map(function (e) {
                                return r.createElement(s, {
                                    key: e.name,
                                    name: e.name,
                                    image: e.image,
                                    title: e.title,
                                    startDate: e.startDate,
                                });
                            })
                        )
                    )
                );
            };
        },
    },
]);
//# sourceMappingURL=component---src-pages-team-tsx-cca5e54ced8eb81a7c33.js.map
