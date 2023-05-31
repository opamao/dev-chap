"use strict";
(self.webpackChunkvehikl_website = self.webpackChunkvehikl_website || []).push([
    [691],
    {
        3830: function (e, t, a) {
            a.r(t),
                a.d(t, {
                    default: function () {
                        return m;
                    },
                });
            var n = a(7294),
                c = a(8780),
                i = a(396),
                l = a(5689),
                r = function (e) {
                    var t = e.clients;
                    return n.createElement(
                        l.$0,
                        null,
                        n.createElement(
                            l.W2,
                            null,
                            n.createElement(l.UZ, {
                                heading: "Our Clients",
                                body: "We've worked with customers of every size: from startup to enterprise, and everything in between. Here are a few of the exciting projects we've been working on recently.",
                            }),
                            n.createElement(
                                "div",
                                {
                                    className:
                                        "grid grid-cols-2 lg:grid-cols-4 gap-8",
                                },
                                t.map(function (e) {
                                    return n.createElement(
                                        l.Zb,
                                        {
                                            key: e.id,
                                            variant: "flat",
                                            className:
                                                "flex items-center justify-center",
                                        },
                                        n.createElement(i.G, {
                                            image: (0, i.d)(e.logo),
                                            alt: e.name,
                                            className:
                                                "opacity-60 brightness-0 invert max-w-[150px]",
                                        })
                                    );
                                })
                            )
                        )
                    );
                },
                s = function (e) {
                    var t = e.events.reverse(),
                        a = Math.ceil(t.length / 3),
                        c = [t.slice(0, a)].concat(
                            [t.slice(a, 2 * a)],
                            [t.slice(2 * a, t.length)]
                        );
                    return n.createElement(
                        l.$0,
                        null,
                        n.createElement(
                            l.W2,
                            null,
                            n.createElement(l.UZ, {
                                heading: "Community",
                                body: "We love open source and actively contribute to the community. We believe active participation in the design and development communities makes everybody better.",
                            }),
                            n.createElement(
                                "div",
                                { className: "grid lg:grid-cols-3" },
                                c.map(function (e, t) {
                                    return n.createElement(
                                        "div",
                                        { key: t },
                                        e.map(function (e) {
                                            return n.createElement(
                                                "span",
                                                {
                                                    key: e.id,
                                                    className:
                                                        "flex items-center justify-center gap-2 p-1 lg:p-2 text-center",
                                                },
                                                e.name
                                            );
                                        })
                                    );
                                })
                            )
                        )
                    );
                },
                o = function (e) {
                    var t = e.meetups;
                    return n.createElement(
                        l.$0,
                        null,
                        n.createElement(
                            l.W2,
                            null,
                            n.createElement(l.UZ, {
                                heading: "Meetups we host",
                                body: "Vehikl sponsors, attends, and participates in conferences both locally and around the world. We even host local meetups. Join us!",
                            }),
                            n.createElement(
                                "div",
                                {
                                    className:
                                        "grid lg:grid-cols-3 gap-4 lg:gap-8",
                                },
                                t.map(function (e) {
                                    return n.createElement(
                                        l.Zb,
                                        {
                                            key: e.id,
                                            variant: "flat",
                                            className: "flex flex-1 flex-col",
                                        },
                                        n.createElement(
                                            "div",
                                            {
                                                className:
                                                    "h-48 flex items-center justify-center mb-6 bg-gray-800 p-4 rounded",
                                            },
                                            n.createElement("img", {
                                                src: e.logo,
                                                className: "w-32 max-h-24",
                                                alt: e.name,
                                            })
                                        ),
                                        n.createElement(
                                            l.X6,
                                            { variant: "h2" },
                                            e.name
                                        ),
                                        n.createElement(
                                            l.nv,
                                            { className: "mb-8" },
                                            e.description
                                        ),
                                        n.createElement(
                                            "a",
                                            {
                                                href: e.link,
                                                target: "_blank",
                                                rel: "noopener",
                                                className:
                                                    "text-brand hover:underline mt-auto",
                                            },
                                            "View on meetup.com"
                                        )
                                    );
                                })
                            )
                        )
                    );
                },
                p = function () {
                    return n.createElement(
                        "section",
                        null,
                        n.createElement(
                            l.W2,
                            null,
                            n.createElement(l.UZ, {
                                heading: "What we do",
                                body: "We're a software consultancy specialising in PHP and JavaScript. We build best-in-class web applications written with popular frameworks such as Laravel, Express, NestJS, Vue, and React. Think of us as an extension of your team.",
                                marginBottom: !1,
                            })
                        ),
                        n.createElement(
                            "section",
                            {
                                className:
                                    "py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900",
                            },
                            n.createElement(
                                l.W2,
                                null,
                                n.createElement(
                                    "div",
                                    {
                                        className:
                                            "grid gap-4 lg:gap-8 lg:grid-cols-2 content-center",
                                    },
                                    n.createElement(
                                        "div",
                                        {
                                            className:
                                                "flex flex-col justify-center",
                                        },
                                        n.createElement(
                                            l.X6,
                                            { variant: "h2" },
                                            "App Development"
                                        ),
                                        n.createElement(
                                            l.nv,
                                            { variant: "lead" },
                                            "We’re proud test-driven developers who focus on writing clean, maintainable code. Our developers are constantly learning new techniques and concepts that put them ahead of the game, and can help share that knowledge with your team. Pairing and Mobbing are practices we use daily as we take pride in our work, and we cherish the opportunity to teach and learn with our peers."
                                        )
                                    ),
                                    n.createElement(i.S, {
                                        placeholder: "blurred",
                                        className:
                                            "mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full order-first lg:order-1",
                                        src: "../../../images/illustrations/png/app_development.png",
                                        alt: "App development",
                                        __imageData: a(8469),
                                    })
                                )
                            )
                        ),
                        n.createElement(
                            "section",
                            {
                                className:
                                    "py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900",
                            },
                            n.createElement(
                                l.W2,
                                null,
                                n.createElement(
                                    "div",
                                    {
                                        className:
                                            "grid gap-4 lg:gap-8 lg:grid-cols-2 content-center",
                                    },
                                    n.createElement(i.S, {
                                        placeholder: "blurred",
                                        className:
                                            "mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full",
                                        src: "../../../images/illustrations/png/technical_leadership.png",
                                        alt: "Technical leadership",
                                        __imageData: a(4643),
                                    }),
                                    n.createElement(
                                        "div",
                                        {
                                            className:
                                                "flex flex-col justify-center",
                                        },
                                        n.createElement(
                                            l.X6,
                                            { variant: "h2" },
                                            "Technical Leadership"
                                        ),
                                        n.createElement(
                                            l.nv,
                                            { variant: "lead" },
                                            "We pride ourselves on delivering exceptional code, and we facilitate this when working with our clients. Our team consists of experts that will help you guide your team into building products you can be proud of."
                                        )
                                    )
                                )
                            )
                        ),
                        n.createElement(
                            "section",
                            {
                                className:
                                    "py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900",
                            },
                            n.createElement(
                                l.W2,
                                null,
                                n.createElement(
                                    "div",
                                    {
                                        className:
                                            "grid gap-4 lg:gap-8 lg:grid-cols-2 content-center",
                                    },
                                    n.createElement(
                                        "div",
                                        {
                                            className:
                                                "flex flex-col justify-center",
                                        },
                                        n.createElement(
                                            l.X6,
                                            { variant: "h2" },
                                            "Product Design"
                                        ),
                                        n.createElement(
                                            l.nv,
                                            { variant: "lead" },
                                            "We practice user-centered design. While we’re planning, designing, and building, we strive to solve the user’s problem first, so that your business goals are met. As a result, your users will experience software that is both intuitive and beautiful.",
                                            " "
                                        )
                                    ),
                                    n.createElement(i.S, {
                                        placeholder: "blurred",
                                        className:
                                            "mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full order-first lg:order-1",
                                        src: "../../../images/illustrations/png/product_design.png",
                                        alt: "Product design",
                                        __imageData: a(4472),
                                    })
                                )
                            )
                        )
                    );
                },
                d = function (e) {
                    var t = e.advisors;
                    return n.createElement(
                        l.$0,
                        null,
                        n.createElement(
                            l.W2,
                            null,
                            n.createElement(l.UZ, {
                                heading: "Advisors",
                                body: "As long standing supporters of Laravel, we have established strong relationships with the creator of the framework and its key community leaders.",
                            }),
                            n.createElement(
                                "div",
                                {
                                    className:
                                        "grid lg:grid-cols-2 gap-4 lg:gap-8",
                                },
                                t.map(function (e) {
                                    return n.createElement(
                                        l.Zb,
                                        {
                                            key: e.id,
                                            variant: "flat",
                                            className:
                                                "flex flex-col items-center justify-center",
                                        },
                                        n.createElement(i.G, {
                                            image: (0, i.d)(e.image),
                                            alt: e.name,
                                            className:
                                                "mb-6 rounded max-w-[240px]",
                                        }),
                                        n.createElement(
                                            "span",
                                            { className: "font-medium mb-1" },
                                            e.name
                                        ),
                                        n.createElement(
                                            "span",
                                            {
                                                className:
                                                    "text-xs uppercase tracking-wider mb-2",
                                            },
                                            e.title
                                        ),
                                        n.createElement(
                                            "div",
                                            { className: "flex gap-4" },
                                            n.createElement(
                                                "a",
                                                {
                                                    href: e.github,
                                                    target: "_blank",
                                                    rel: "noopener",
                                                    className:
                                                        "text-brand hover:underline",
                                                },
                                                "Github"
                                            ),
                                            n.createElement(
                                                "a",
                                                {
                                                    href: e.twitter,
                                                    target: "_blank",
                                                    rel: "noopener",
                                                    className:
                                                        "text-brand hover:underline",
                                                },
                                                "Twitter"
                                            )
                                        )
                                    );
                                })
                            )
                        )
                    );
                },
                m = function (e) {
                    var t = e.data,
                        a = t.clients.nodes.map(function (e) {
                            return { logo: e.logo, name: e.name, id: e.id };
                        }),
                        i = t.advisors.nodes.map(function (e) {
                            return {
                                image: e.image,
                                name: e.name,
                                title: e.title,
                                github: e.github,
                                twitter: e.twitter,
                                id: e.id,
                            };
                        }),
                        l = t.meetups.nodes.map(function (e) {
                            return {
                                name: e.name,
                                description: e.description,
                                logo: e.logo.publicURL,
                                link: e.link,
                                id: e.id,
                            };
                        }),
                        m = t.events.nodes.map(function (e) {
                            return {
                                name: e.name,
                                sponsor: e.sponsor,
                                id: e.id,
                            };
                        });
                    return n.createElement(
                        c.T3,
                        {
                            title: "Home",
                            description:
                                "Vehikl is a web app consultancy that specializes in PHP, and JavaScript; specifically with Laravel, Vue, React, and Node.",
                            ogUrl: "https://vehikl.com",
                            promote: !0,
                        },
                        n.createElement(c.VM, null),
                        n.createElement(p, null),
                        n.createElement(r, { clients: a }),
                        n.createElement(s, { events: m }),
                        n.createElement(d, { advisors: i }),
                        n.createElement(o, { meetups: l })
                    );
                };
        },
        4643: function (e) {
            e.exports = JSON.parse(
                '{"layout":"constrained","placeholder":{"fallback":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAYAAACpUE5eAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEAElEQVQ4yzWTW0ybdRyGfxQVqCTgxgAdpXJqU9pCgTLKCmOcWtba7ys90gNQoP16hKXQwuhK26/0QKHAnMCIW+LcvJjRxambgAQoJF6YGGPM9MZolnjlzYxTsxECfwPqxZvn7slz8wKv0w6V3TEo8PwCFN0WNOJjFC42lcGUXKUC4BSzwwenpIuAEAC6AxknVEPaMQd0Q1AqiwEHJ4EtDwNDdxOALbqcJhK2pNXik1QGFilk4dPFbJyk16qjJUrHnBAbDEtUBpeGK/bjd/31ngehWtt9szwHAIFIOQr50nngyklgKpLAwUMAra04pQKL5pZjMWaj0scVKq5wzmLXCsS6iXluq/mgTNC3XyIwIXazAW2TeWgnWox6TeYunjRAFWlHcnU9phyZykHNlr8PLCwMUC4NZtV1B9h9ekIw0tcrJIwDzRbzKEOIu1fKBUZU2mB8WnJO/7ywuud3+aWmp5eN5w8LWwIKhmaB/nLnKgOE3xTBpQ9Kq/AgoxInqVAmJXMECl+1f0DTEh5SCb16eW2X2n22Te0NMYX9iNlk2i+u6zl6g6c5ymXrDwqrNIjT6bRipkTZpr0o+rUrd2VeL5SVYTEOD58qhW7lEIUmjRf1GmwCs1pdvTTh7LsX95o4mN/0v5DGN+znczV/FvP1z4rq9E/YbVb9kkvT8ng487snVkA/EtRtvirMZWJhGvCxcVj02KGmO3gGhAvF6wnnV1uz1ucrfveksCekPCdza63e2ffGAtc+bNf52i9oA/wGVYgt1o3XfG/L2vvBnLV3m2g2iLXjvNPiGSpwZX749h172nW/BzbnR+i78/Zna5Eh9GXcjB7NDC8D71aBK7Ta5yTftb8kWSqH3OU8uHCDPqg1NNzVlgx36nwcmW6sulRC5ow2nQGo7zDB42Ub5acbFtictSt2k1a0FjH/9Tk5gDbi1t8SXrdx0ePA7wXt3vsR1/WPIsPJ+LhHAo1xGl89zSqTxVjlUjI/v/czKMGTADyRHSZstnS0aYEv4nbu5ozlj9QsgTZi5qP1qPlwa4ZA27PW/0agvaQVpZK2g5sBtxP4Sdp51VQVD/ef4squAhcPAtR0WIDT4UifNPenQ8Vqttfpbn8wTXyylSD+3p0j0LF8O0GgrYQFpeash6mk7cXuv9IXobHxtzIvRiua1FP51fIAcLAgnNwmk6UBerOdIlD6X3+1LU6HhgXasG20607AvroWt/36KEr8/DFJ7KzHiJP61Jx1/7h0LeHYeeVi/M1W9SQV6kngYFMAFcbbUNMdAJbIDWJjCDDDlcyOHt9rUPV2NsB6Rp3cl8eTek8DIMqtSULykOzfX48MHksPUnM29GnMdeFh3AkbCQelUhGHfwCDhI8zD/BM3QAAAABJRU5ErkJggg=="},"images":{"fallback":{"src":"/static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png","srcSet":"/static/25c41525706d29b9e5380e0b70a3365b/b19e0/technical_leadership.png 341w,\\n/static/25c41525706d29b9e5380e0b70a3365b/82f3b/technical_leadership.png 682w,\\n/static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png 1364w","sizes":"(min-width: 1364px) 1364px, 100vw"},"sources":[{"srcSet":"/static/25c41525706d29b9e5380e0b70a3365b/44daa/technical_leadership.webp 341w,\\n/static/25c41525706d29b9e5380e0b70a3365b/7b684/technical_leadership.webp 682w,\\n/static/25c41525706d29b9e5380e0b70a3365b/13b3e/technical_leadership.webp 1364w","type":"image/webp","sizes":"(min-width: 1364px) 1364px, 100vw"}]},"width":1364,"height":872}'
            );
        },
        8469: function (e) {
            e.exports = JSON.parse(
                '{"layout":"constrained","placeholder":{"fallback":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAYAAACpUE5eAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEGUlEQVQ4yyWSeUyTdxzGv4DC2IETt3HMlh60QPu2tO/7Uo6KA0WHHL3o24sOOZRrCKgIhKHwtn2p0E0gxmjYYHNTjswxcHMgY6sMcCNZgoDFaf+ZM2iyzSVLjCBHfgvsSZ5/P3ny5APC9AaQZpwCuY4OxLT0G6D86jUIehTQlJsZFE7m+gXD/zlRVe+LEILNPlp67Lv0+AnszWvzA4jfJtXZX5Vq7UGYxvYKyHQ0JOpPb4/R2IXxqjMyR1VG5uXGROPZijystJp5M/HSmj9CyKe15SN4vryc/MfSk845j/eWs+tbZSBZzSlo6FYKM5tixGpaJNHapLAjoxN2ZXYEUJYywqo/pphiWI23mZ1P8bT8QU5iUZ9gT+GAcE/Rl7vj8i4frnL9e6Sm3fP95OwXEzMLw59fG3N8Nz413jNwsxYEpRzSwGAA8dMA+6+CVEPzjMYSZf7RusgiS3pXVIIZRRBmxCFNiIWbkUBhRCHRWWi33Lj84/Ss+7PBSeuVwXHb8OjEUHf/SD2I3+cSFCMFkcYOEq0NMI3dPzq7WcTP6wvnJh/7gEeakDDe9DwmwbTKJU1rPIJa5eE5iKewPHNeHCz/5ubEyOAN99XugdF6P1klT653SCVaGwukOjvgejsQejvIsmpfVhR2hUSnFJ+JVFhQZJxphYNTa1yCWmUT5vVQuQXtFOkfDo24h8YmZnqvj013jE/84t6RVCuQ5TiE6SWdvpBScA5IQwuw0xogMyvXR2K9FIwdqCzmKywvWHIDCpcZEZvMRaFy60bk5kLCsJKcXfF30sHC+/J38h7ID5Z/zXq3ORLX20OkOQ7YAsbq7Fs64BTjL1LRApxiouWZNWlRqeWmYOXx/eFxBf25h9JRdyG27tCLUSyRsRYh0yOuTItCpNQibnJFiVXNb8soJ4DyPdcWLFZnDxCpaK5cz4hIisGAWxEGezvCep11hv6m0rkbtAXda8TWfygL3tDuS10JizW+YMtyEIuwLEip1khMQ2+qEwjW+h6fTSFFKlqoMDkloSl1QuAXcBvPD1mG205ed7ceQT+3l6GPa/LQcXUCKjigWBOTqg0erlvmy7WIRZi9MqOLj6npKInGxgal1bVNrKYFuJ6JhV1mtrbyAjk5s3Dtp5l5NNr/KXK3FaNbH5Y9M1FFnmDM9DsLt/wVQRifCuKoJT5pWOImHL6Cm1xckaqJLdHa2JBaeA7izWdDXk88yb3YO57/69xvf84vetGcx4vct2fRcM+FHttRq0SgdnDw7FMiIusELk6vSYg6VJ8kUZ+OwylGJNbYojENzZNobW8BQBIAZGz9eOfug/Pzi957cx7vP3Me78M7d+9/ggCgz3UaIKIEOKnVwE8uBgA/0DunfGWWzu0xKjoQp5iXSEOL/77CdvgPLcWg9+nvhFYAAAAASUVORK5CYII="},"images":{"fallback":{"src":"/static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png","srcSet":"/static/c9967c6c155341090e9e9a7e9542fc74/9e339/app_development.png 334w,\\n/static/c9967c6c155341090e9e9a7e9542fc74/5e476/app_development.png 668w,\\n/static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png 1335w","sizes":"(min-width: 1335px) 1335px, 100vw"},"sources":[{"srcSet":"/static/c9967c6c155341090e9e9a7e9542fc74/2a1fa/app_development.webp 334w,\\n/static/c9967c6c155341090e9e9a7e9542fc74/e94f1/app_development.webp 668w,\\n/static/c9967c6c155341090e9e9a7e9542fc74/473f0/app_development.webp 1335w","type":"image/webp","sizes":"(min-width: 1335px) 1335px, 100vw"}]},"width":1335,"height":850}'
            );
        },
        4472: function (e) {
            e.exports = JSON.parse(
                '{"layout":"constrained","placeholder":{"fallback":"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAAAsTAAALEwEAmpwYAAADhklEQVQozwF7A4T8ADNWhgMyVYUbIEd8IiFGeSRIZY0uSWWLJ1FsjyJHYoglV3KWHlp0lhlOZ4gdT2eHITxfkyFrcncxe3RfNkV6ziclQGEeKUp3HzFVhxI9XIgCADZYhxEfRnwnUm6TMrvBycO/xMvcw8jP2cHGzdvCx8/cub/I3LzCy9rBx8/bwsfN3sHM3drOolXq2ooA7dK4geK6yuSwE0eUHi9OeBQ+YZIGAERjjg0AGWASeYylS8DEyv+/w8r/w8fO/8PHzv/Y29//wsXK/8zP1P/c3+L/3d/k/9rc3//Smzv/038A/92fMf/OuZT5oYJHPwACrwhbaXgHAFpzlwgAI2oWipuwOdbY3Pzc3+P93N/i/M7S1/2ZorH9jJiq/Y2Yq/2Ml6n9hpKl/aOruPra18/93c2x/d+oR/neiAD/0IwRggAP/xCZdTIGAENXeABQZIMiPVFzsmRzjP9cbIf+UmOA/khYdP8kOV7+FyxS/x0wU/4dL1T+ESZN/yg8YP+FkKT+iZ28/ZSXmP+ekHnzYmNhcgtBkRf//wAAAGJoeQB3eoYvMj9b/xktUv8iMVH+HCxO/x8xU/4vQGL+LDpa/jpAVv4vOVT+JDRV/hwxV/4TLVf/fEkp/19GQP4KLGP/IDZe8zdTejggV58FAE5ddwBSZIEnOENe+C07Wv83Plb+JjRT/ig4WP47RF3/Gy1Q/x8rSf8aKkv+FSpR/xsyWP4iOV/+YUtG/kZASv0TLVf/HTNZ3jFRfjgtUoYbAB5HgA48W4U6MUJi+RoqTf8RJkz6FyhL/B8xUvw7R2D7UWN/+1pxkPtjcYn8UWB7/CMxT/wlL0r8FihM/BgnSfkaKUr/HjRZ2zRWhS4sUIIpAC1Rgx4qT4EmTl98hpCXpf+cpLH/oqq3/6etuP+utL7/0byx/+K9pf/Y0tH/uL7G/3F7jv9ndIr/b3iL/2t1if9XY3z/KDpclypShygvUoIoADtciQgiSX4aR2qYHLrDzZDEytGqyM3TteLj5tHf5uy6ypp9qtaZc77a2tvN2NzhyGyEpMlTb5TCs7vFqcrQ2Ku8x9R2JU+HIjBThCQxVIUOAD1digBBYIsDI0d5EgAAGg8AAAAOABFWHC5RgioAADAXAAB9EwBf5xQoW5cXHUN5FAAhWxMAADYQAAAACwAAAAoAABsNKk1+FC9SgwU1WIcARkqomPJws2wAAAAASUVORK5CYII="},"images":{"fallback":{"src":"/static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png","srcSet":"/static/6afc9b8cd04f8df613d98ac4510850c7/dfee2/product_design.png 348w,\\n/static/6afc9b8cd04f8df613d98ac4510850c7/6a270/product_design.png 696w,\\n/static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png 1391w","sizes":"(min-width: 1391px) 1391px, 100vw"},"sources":[{"srcSet":"/static/6afc9b8cd04f8df613d98ac4510850c7/1326d/product_design.webp 348w,\\n/static/6afc9b8cd04f8df613d98ac4510850c7/d221e/product_design.webp 696w,\\n/static/6afc9b8cd04f8df613d98ac4510850c7/e382c/product_design.webp 1391w","type":"image/webp","sizes":"(min-width: 1391px) 1391px, 100vw"}]},"width":1391,"height":772}'
            );
        },
    },
]);
//# sourceMappingURL=component---src-pages-index-tsx-151114a0ce1143766509.js.map
